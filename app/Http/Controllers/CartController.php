<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


use Response;

class CartController extends Controller
{
    public function index(){
        //  $user_id=(session('user_id'))?session('user_id'):session('temp_user_id');
            $user_id=(session('user_id'))?session('user_id'):session('guest_user');
        
      //echo $user_id;die;
       $data['cart_prod'] = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Product')->select('c.*','p.*')->get();
       $data['desk_cart'] = DB::table('desk_cart')->where('user_id',$user_id)->where('status',0)->select('*')->get();
         //echo "<pre>";print_r($data);die;
       return view('view-cart',$data);
    }
     public function getCity(Request $request){
         $state_id=$request->state_id;
         //echo $state_id;die;
        $data['cities'] = DB::table('city_tbl')->where('state_id',$state_id)->get();
         return response()->json($data);
       
    }
    public function checkout(Request $request){
        $user_id=(session('user_id'))?session('user_id'):session('guest_user');
        $data['address'] = DB::table('address')->where('user_id',$user_id)->where('default_status',1)->where('status',1)->first();
        $data['cart_prod'] = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.iteam_type','Product')->where('cart_status',0)->where('c.user_id',$user_id)->select('c.*','p.*')->get();
        $data['bottom'] = DB::table('cart as c')->leftJoin('bottom_gallery as b','b.id','=','c.prod_id')->leftJoin('deskbottoms as d','b.bottom_id','=','d.bottom_id')->where('cart_status',0)->where('c.iteam_type','Bottom')->where('c.user_id',"$user_id")->select('c.id','d.bottom_name')->get();
        $data['top'] = DB::table('cart as c')->leftJoin('top_gallery as t','t.id','=','c.prod_id')->leftJoin('desktops as d','t.top_id','=','d.top_id')->where('cart_status',0)->where('c.iteam_type','Top')->where('c.user_id',"$user_id")->select('c.id','d.top_name')->get();
        $data['smart_prod'] = DB::table('cart as c')->leftJoin('products as p','p.prod_id','=','c.prod_id')->leftJoin('smart_features as f','f.id','=','c.prod_id')->where('cart_status',0)->where('c.user_id',$user_id)->select('c.*','p.*','f.feature_name')->get();
        $data['desk_cart'] = DB::table('desk_cart')->where('user_id',$user_id)->where('status',0)->select('*')->get();
        $data['state'] = DB::table('state_tbl')->get();
        if(isset($data['address']->state)){
            $data['city'] = DB::table('city_tbl')->where('state_id', $data['address']->state)->get();
        }
        //         if(!$data['address'])
        //         {
        //             ?><script>
        //     window.location.href = "https://cws.in.net/deskohome/";
        // </script><?php
        //         }
                    //   echo "<pre>";print_r($data);die;
         return view('checkout',$data);
        
    }
    
     public function checkout_payment(Request $request){
        //  $user_id=session('user_id');
          $user_id=(session('user_id'))?session('user_id'):session('guest_user');
         $data['address'] = DB::table('address')->where('user_id',$user_id)->where('default_status',1)->where('status',1)->first();
         $data['cart_prod'] = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.iteam_type','Product')->where('cart_status',1)->where('c.user_id',$user_id)->select('c.*','p.*')->get();
        $data['desk_cart'] = DB::table('desk_cart')->where('user_id',$user_id)->where('status',0)->select('*')->get();
        // $data['orders'] = DB::table('orders')->where('order_id',$order_id)->select('*')->get();
            $data['state'] = DB::table('state_tbl')->get();
            if(isset($data['address']->state)){
            $data['city'] = DB::table('city_tbl')->where('state_id', $data['address']->state)->get();
            }
         return view('payment-method',$data);
        
    }
    public function changeCartQty(Request $request){
         $cart_id=$request->cart_id;
         $qty=$request->current_val;
         $iteam_type=$request->iteam_type;
         $action=$request->action;
         if($iteam_type=='prod'){
          // echo "cartid=".$cart_id."qty=".$qty;die;
         $status_updated= DB::table('cart')->where('id',$cart_id)->update(['qty' => $qty]);
         echo true;   
         }
          if($iteam_type=='desk'){
          // echo "cartid=".$cart_id."qty=".$qty;die;
            $desk = DB::table('desk_cart')->where('desk_cart_id',$cart_id)->select('desk_price','desk_qty')->get();
            if($action=='plus'){$desk_price=$desk[0]->desk_price + ($desk[0]->desk_price / $desk[0]->desk_qty);}
            if($action=='minus'){$desk_price=$desk[0]->desk_price - ($desk[0]->desk_price / $desk[0]->desk_qty);}
            
         $status_updated= DB::table('desk_cart')->where('desk_cart_id',$cart_id)->update(['desk_qty' => $qty,'desk_price'=>$desk_price]);
         $status_updated= DB::table('cart')->where('desk_cart_id',$cart_id)->update(['qty' => $qty]);
         echo true;   
         }
        
    }
    public function removeCartCheckout($iteam_type,$cart_id){
    //  $user_id=(session('user_id'))?session('user_id'):session('temp_user_id');
     $user_id=(session('user_id'))?session('user_id'): session('guest_user');
       if($iteam_type=='desk'){
          $desk_deleted = DB::table('desk_cart')->where('desk_cart_id',$cart_id)->where('user_id',$user_id)->delete();
          if($desk_deleted){
              $cart_deleted = DB::table('cart')->where('desk_cart_id',$cart_id)->where('user_id',$user_id)->delete();
               if($cart_deleted){
               return \redirect('/checkout')->with('success', 'Cart iteam removed successfully !.'); 
                }else{
                   return \back()->with('fail', 'Failed to remove cart iteam.'); 
                }
            }else{
               return \back()->with('fail', 'Failed to remove cart iteam.'); 
            }
       }elseif($iteam_type=='prod'){
           $cart_deleted = DB::table('cart')->where('id',$cart_id)->where('user_id',$user_id)->delete();
        // echo "<pre>";print_r($data['cart_prod']);die;
            if($cart_deleted){
            //   return \redirect('/checkout')->with('success', 'Cart item removed successfully !.'); 
            return redirect()->route('checkout', ['custom',  'Your-Desk'])->with('success', 'Product Added to cart successfully!');

            }else{
             //  return \back()->with('fail', 'Failed to remove cart iteam.'); 
            //   return \redirect('/checkout'); 
            return redirect()->route('checkout', ['custom',  'Your-Desk']);

            }
       }else{}
      
    }
    public function removeCart($iteam_type,$cart_id){
    //   $user_id=(session('user_id'))?session('user_id'):session('temp_user_id');
     $user_id=(session('user_id'))?session('user_id'):session('guest_user');
       if($iteam_type=='desk'){
          $desk_deleted = DB::table('desk_cart')->where('desk_cart_id',$cart_id)->where('user_id',$user_id)->delete();
          if($desk_deleted){
              $cart_deleted = DB::table('cart')->where('desk_cart_id',$cart_id)->where('user_id',$user_id)->delete();
               if($cart_deleted){
            //   return \redirect('/view-cart')->with('success', 'Cart iteam removed successfully !.'); 
               return \redirect('/checkout')->with('success', 'Cart iteam removed successfully !.'); 
                }else{
                   return \back()->with('fail', 'Failed to remove cart iteam.'); 
                }
            }else{
               return \back()->with('fail', 'Failed to remove cart iteam.'); 
            }
       }elseif($iteam_type=='prod'){
           $cart_deleted = DB::table('cart')->where('id',$cart_id)->where('user_id',$user_id)->delete();
        // echo "<pre>";print_r($data['cart_prod']);die;
            if($cart_deleted){
            //   return \redirect('/view-cart')->with('success', 'Cart iteam removed successfully !.'); 
               return \redirect('/checkout')->with('success', 'Cart iteam removed successfully !.'); 
            }else{
               return \back()->with('fail', 'Failed to remove cart iteam.'); 
            }
       }else{}
       
      
    }
     public function capture_image_script(Request $request){
         $image = $_POST['image'];
         // print_r($image);die;
        // $location = asset('admin/public/capture_desk_image');
        $location = $_SERVER["DOCUMENT_ROOT"].'/deskohome/admin/public/capture_desk_image';
        //echo $location;die;
        $image_parts = explode(";base64,", $image);
       
        $image_base64 = base64_decode($image_parts[1]);
         //echo($location);die;
        $filename = "screenshot_".uniqid().'.png';
        $file = $location .'/'. $filename;
        file_put_contents($file, $image_base64);
         echo $filename ;die();
        
     }
    public function deskAddToCart(Request $request){
        $data = $request->all();
        // $orderType = $data['order_type'];

        $user_id=(session('user_id'))?session('user_id'): session('guest_user');
        $data['total_desk_price']=$total_desk_price    = $request->total_desk_price;
        $data['top_gall_id']    =$top_gall_id = $request->top_gall_id;
        $data['bottom_gall_id'] = $bottom_gall_id = $request->bottom_gall_id;
        $data['smart_feature_ids'] =$smart_feature_ids= ($request->addprice)?$request->addprice:'';
        $data['mobile'] =$mobile= ($request->mobile)?$request->mobile:'';
        $data['captured_desk_image_name'] =$captured_desk_image_name= $request->captured_desk_image_name;
            
        $desk_exist = DB::table('desk_cart')->where('status',0)->where('top_gall_id',$top_gall_id)->where('bottom_gall_id',$bottom_gall_id)->where('smart_feature_ids',json_encode($smart_feature_ids))->where('user_id',$user_id)->get();
             
        if(!$desk_exist->isEmpty()){ 
            $desk_qty =  ($desk_exist[0]->desk_qty + 1);
            $desk_price =  ($desk_exist[0]->desk_price + $total_desk_price);
            $status_desk= DB::table('desk_cart')->where('status',0)->where('top_gall_id',$top_gall_id)->where('bottom_gall_id',$bottom_gall_id)->where('smart_feature_ids',json_encode($smart_feature_ids))->where('user_id',$user_id)->update(['desk_qty' => $desk_qty,'desk_price'=>$desk_price]);
            $top_gall_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->top_gall_id)->where('iteam_type','Top')->where('user_id',$user_id)->get();
	        $qty =  ($top_gall_exist[0]->qty + 1);
            $status_top= DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->top_gall_id)->where('iteam_type','Top')->where('user_id',$user_id)->update(['qty' => $qty]);
          
            $bottom_gall_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->bottom_gall_id)->where('iteam_type','Bottom')->where('user_id',$user_id)->get();
	        $qty =  ($bottom_gall_exist[0]->qty + 1);
            $status_bottom = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->bottom_gall_id)->where('iteam_type','Bottom')->where('user_id',$user_id)->update(['qty' => $qty]);

            if(!empty(json_decode($desk_exist[0]->smart_feature_ids))){
                foreach(json_decode($desk_exist[0]->smart_feature_ids) as $sm){
        	      $smart_feature_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$sm)->where('iteam_type','Smart_feature')->where('user_id',$user_id)->get();
        	       if(!$smart_feature_exist->isEmpty()){ 
                       $qty =  ($smart_feature_exist[0]->qty + 1);
                  $status_sm_feat= DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$sm)->where('iteam_type','Smart_feature')->where('user_id',$user_id)->update(['qty' => $qty]);
        	       }  
    	        }
            }
            
         } else {
            $sub_total1 =  $total_desk_price  - ($total_desk_price/10 );
            $sub_total1 = ceil($sub_total1 / 10) * 10; 
                         
            $total_desk_price = $sub_total1 ;
	        $itm_desk_arr=['user_id'=>$user_id,'desk_qty'=>1,'desk_price'=>$total_desk_price,'top_gall_id'=>$top_gall_id,'bottom_gall_id'=>$bottom_gall_id,'smart_feature_ids'=>json_encode($smart_feature_ids),'captured_desk_img'=>$captured_desk_image_name,'mobile'=>$mobile];
            $desk_cart_id=DB::table('desk_cart')->insertGetId($itm_desk_arr);
         
            $itm_top_arr=['prod_id'=>$top_gall_id,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Top','desk_cart_id'=>$desk_cart_id];
            $top_saved=DB::table('cart')->insert($itm_top_arr);
         
            $itm_bottom_arr=['prod_id'=>$bottom_gall_id,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Bottom','desk_cart_id'=>$desk_cart_id];
            $top_saved=DB::table('cart')->insert($itm_bottom_arr);
            if(!empty($smart_feature_ids)){
        	    foreach($smart_feature_ids as $sm){
            	     $itm_sf_arr=['prod_id'=>$sm,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Smart_feature','desk_cart_id'=>$desk_cart_id];
                     $sf_saved=DB::table('cart')->insert($itm_sf_arr);
        	    }
    	    }
	    }
	   // if($orderType == 'buy_now'){
	        return redirect()->route('checkout', ['custom',  'Your-Desk'])->with('success', 'Product Added to cart successfully!');
	   // }else{
    //         // return response()->json(['status' => 'success', 'message' => 'Product Added to cart successfully!']);
	   //    //  $url = URL::current();
    //         // Redirect to the current URL, triggering a refresh
    //         // return redirect($url);
	   // }
	   
	    
	   return \redirect('/checkout')->with('success', 'Product Added to cart successfully!');

    }
    
    public function deskAddToCartsecond(Request $request){
        echo '<pre>';
        print_r(request()->post());
        echo '</pre>';
        die;
       
        //  $user_id=(session('user_id'))?session('user_id'): session('guest_user');

        //      $data['total_desk_price']=$total_desk_price    = $request->total_desk_price;
        //     $data['top_gall_id']    =$top_gall_id = $request->top_gall_id;
        //     $data['bottom_gall_id'] = $bottom_gall_id = $request->bottom_gall_id;
        //     $data['smart_feature_ids'] =$smart_feature_ids= ($request->addprice)?$request->addprice:'';
        //     $data['mobile'] =$mobile= ($request->mobile)?$request->mobile:'';
        //     $data['captured_desk_image_name'] =$captured_desk_image_name= $request->captured_desk_image_name;
            
        //      $desk_exist = DB::table('desk_cart')->where('status',0)->where('top_gall_id',$top_gall_id)->where('bottom_gall_id',$bottom_gall_id)->where('smart_feature_ids',json_encode($smart_feature_ids))->where('user_id',$user_id)->get();
         
        //      if(!$desk_exist->isEmpty()){ 
        //           $desk_qty =  ($desk_exist[0]->desk_qty + 1);
        //           $desk_price =  ($desk_exist[0]->desk_price + $total_desk_price);
        //       $status_desk= DB::table('desk_cart')->where('status',0)->where('top_gall_id',$top_gall_id)->where('bottom_gall_id',$bottom_gall_id)->where('smart_feature_ids',json_encode($smart_feature_ids))->where('user_id',$user_id)->update(['desk_qty' => $desk_qty,'desk_price'=>$desk_price]);
        //       $top_gall_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->top_gall_id)->where('iteam_type','Top')->where('user_id',$user_id)->get();
    	   //     $qty =  ($top_gall_exist[0]->qty + 1);
        //       $status_top= DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->top_gall_id)->where('iteam_type','Top')->where('user_id',$user_id)->update(['qty' => $qty]);
              
        //       $bottom_gall_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->bottom_gall_id)->where('iteam_type','Bottom')->where('user_id',$user_id)->get();
    	   //     $qty =  ($bottom_gall_exist[0]->qty + 1);
        //       $status_bottom = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$desk_exist[0]->bottom_gall_id)->where('iteam_type','Bottom')->where('user_id',$user_id)->update(['qty' => $qty]);
 
        //             if(!empty(json_decode($desk_exist[0]->smart_feature_ids))){
        //                 foreach(json_decode($desk_exist[0]->smart_feature_ids) as $sm){
        //         	      $smart_feature_exist = DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$sm)->where('iteam_type','Smart_feature')->where('user_id',$user_id)->get();
        //         	       if(!$smart_feature_exist->isEmpty()){ 
        //                       $qty =  ($smart_feature_exist[0]->qty + 1);
        //                   $status_sm_feat= DB::table('cart')->where('desk_cart_id',$desk_exist[0]->desk_cart_id )->where('prod_id',$sm)->where('iteam_type','Smart_feature')->where('user_id',$user_id)->update(['qty' => $qty]);
        //         	       }  
        //     	        }
        //             }
        //      }else{
    	   //  $itm_desk_arr=['user_id'=>$user_id,'desk_qty'=>1,'desk_price'=>$total_desk_price,'top_gall_id'=>$top_gall_id,'bottom_gall_id'=>$bottom_gall_id,'smart_feature_ids'=>json_encode($smart_feature_ids),'captured_desk_img'=>$captured_desk_image_name,'mobile'=>$mobile];
        //      $desk_cart_id=DB::table('desk_cart')->insertGetId($itm_desk_arr);
             
        //      $itm_top_arr=['prod_id'=>$top_gall_id,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Top','desk_cart_id'=>$desk_cart_id];
        //      $top_saved=DB::table('cart')->insert($itm_top_arr);
             
        //      $itm_bottom_arr=['prod_id'=>$bottom_gall_id,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Bottom','desk_cart_id'=>$desk_cart_id];
        //      $top_saved=DB::table('cart')->insert($itm_bottom_arr);
             
        //              if(!empty($smart_feature_ids)){
        //     	    foreach($smart_feature_ids as $sm){
        //         	     $itm_sf_arr=['prod_id'=>$sm,'user_id'=>$user_id,'qty'=> 1,'iteam_type'=>'Smart_feature','desk_cart_id'=>$desk_cart_id];
        //                  $sf_saved=DB::table('cart')->insert($itm_sf_arr);
                	          
        //     	        }
        //     	    }
             
             
    	   // }
    	    
    	    
    	   // die;
    	   //  return \redirect('/view-cart')->with('success', 'Product Added to cart successfully!');
    	     return \redirect('/checkout')->with('success', 'Product Added to cart successfully!');
    	    // return \redirect('/view-cart');
            
          }
    
    public function deskAddleads(Request $request){
          $contact_no = $request->contact_no;
         $request->session()->put('mobile',$request->contact_no);
          $price = $request->price;
          $image = $request->image;
          print_r($image);
    
    
           $itm_arr=array(
                        'contact_no'   => $contact_no,
                        'price'       => $price,
                        'image'   => $image,
                            );
             $wish=DB::table('leads')->insert($itm_arr);
             if($wish){
                 return $wish;
          die;
                 
             }else{
                 die;
             }
            //   return \redirect('/')->with('success', 'Leads Added successfully!');
            // //   return \redirect('/view-cart')->with('success', 'Product Added to cart successfully!');
            //  }else{
            //      return \back()->with('fail', 'Failed to add leads.'); 
            //  }                                                     
    }
    
    public function addToCart($prod_id)
	    {
    	       $user_id=(session('user_id'))?session('user_id'):session('guest_user');
    	       $prod_exist = DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->get();
    	       $products=DB::table('products')->where('is_deleted',0)->where('prod_id',$prod_id)->get();
    	       $url = !empty( $products[0]->url) ? $products[0]->url : $prod_id;

    	        if(!$prod_exist->isEmpty()){
                    $qty =  ($prod_exist[0]->qty + 1);
                    $status_updated= DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->update(['qty' => $qty]);
    	            if($status_updated){
    	                return redirect()->route('checkout', ['products', $url ])->with('success', 'Product Added to cart successfully!');
        	       }
    	        } 
    	        else{
	                $itm_arr=array(
                        'prod_id'       => $prod_id,
                        'user_id'       => $user_id,
                        'qty'           => 1,
                        'iteam_type'    => 'Product'
                    );
                    $wish=DB::table('cart')->insert($itm_arr);
                    if($wish){
        	           return redirect()->route('checkout', ['products', $url ])->with('success', 'Product Added to cart successfully!');
                    }else{
                     return \back()->with('fail', 'Failed to add to cart.'); 
                    }
	            }
	    }
	    
	    public function addProductToCart($prod_id){
           $user_id=(session('user_id'))?session('user_id'):session('guest_user');
	       $prod_exist = DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->get();
	       $products=DB::table('products')->where('is_deleted',0)->where('prod_id',$prod_id)->get();
	       $url = !empty( $products[0]->url) ? $products[0]->url : $prod_id;

	        if(!$prod_exist->isEmpty()){
	         
                $qty =  ($prod_exist[0]->qty + 1);
                $status_updated= DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->update(['qty' => $qty]);
	            if($status_updated){
	                  return redirect(URL::previous());
	               // return redirect()->route('checkout', ['products', $url ])->with('success', 'Product Added to cart successfully!');
    	       }
	        } 
	        else{
                $itm_arr=array(
                    'prod_id'       => $prod_id,
                    'user_id'       => $user_id,
                    'qty'           => 1,
                    'iteam_type'    => 'Product'
                );
                $wish=DB::table('cart')->insert($itm_arr);
                if($wish){
                      return redirect(URL::previous());
    	           //return redirect()->route('checkout', ['products', $url ])->with('success', 'Product Added to cart successfully!');
                }else{
                 return \back()->with('fail', 'Failed to add to cart.'); 
                }
            }

	    }

	    
	    public function addCart(Request $request)
	    { 
	       
    	       //$user_id=(session('user_id'))?session('user_id'):session('temp_user_id');
    	        $user_id=(session('user_id'))?session('user_id'):session('guest_user');
    	        $prod_id=$request->prod_id;
    	        $qty=$request->qty;
    	       $prod_exist = DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->get();
    	       //print_r($prod_exist);die;
    	       if(!$prod_exist->isEmpty()){ 
    	          
                   $quantity =  ($prod_exist[0]->qty + $qty);
                            
                            
              $status_updated= DB::table('cart')->where('prod_id',$prod_id)->where('iteam_type','Product')->where('cart_status',0)->where('user_id',$user_id)->update(['qty' => $quantity]);
    	         if($status_updated){ 
    	             return \redirect('/checkout')->with('success', 'Product Added to cart successfully!');
    	           //  return \redirect('/view-cart')->with('success', 'Product Added to cart successfully!');
    	         }
    	       }else{
    	     $itm_arr=array(
                            'prod_id'   => $prod_id,
                            'user_id'   => $user_id,
                            'qty'       => $qty,
                            'iteam_type'       => 'Product'
                            );
             $wish=DB::table('cart')->insert($itm_arr);
             if($wish){  
                //  return \redirect('/view-cart')->with('success', 'Product Added to cart successfully!'); 
                 return \redirect('/checkout')->with('success', 'Product Added to cart successfully!'); 
             }else{
                 return \back()->with('fail', 'Failed to add to cart.'); 
             }
    	    }
	    }
	    
	      public function couponCodeNameUsing(Request $request){
	          $data = $request->all();
	          $couponCode = $data['coupon_code_name'];
	          $html11 = '';
	          
	          if(empty($couponCode)){
	                $html11 = "<span class='badge bg-danger py-1  badge-danger ' >Please Enter The Coupon Code </span>";
	                $data = [
                        'html11' => $html11,
                        'status' => 101
                    ];
                    return response()->json($data);
	          }else{
	              	$couponCodeData = DB::table('coupons')->where('code', $couponCode)->get()->toArray();
	              	 if(empty($couponCodeData)){
	              	    $html11 = '';
    	                $html11 = "<span class='badge bg-warning py-1  badge-danger'>Please Enter  Valid Coupon Code</span>";
    	                $data = [
                            'html11' => $html11,
                            'status' => 102
                        ];
                        return response()->json($data);
	                }else{
	                    $couponCodeData = $couponCodeData[0];
	                    $codeName = !empty($couponCodeData->code_name) ? $couponCodeData->code_name : 'Product';
	                    $price = !empty($couponCodeData->product_price) ? $couponCodeData->product_price : '600';
	                    
	                    $html11 = '';
	                    $html11 = "<span class='badge bg-success py-1  badge-danger'> Congratulations ! You got a free  ".$codeName." Woth Rs.".$price." Free</span>";
	                   // $html11 += $codeName;
	                   // $html11 = "Woth Rs.";
	                   // $html11 += $price;

	                   //  $html11 += ;
                        $data = [
                            'html11' => $html11,
                            'status' => 200
                        ];
                        return response()->json($data);
	                    
	                   //  dd("Not");
	                }
	              	
	             
	          }
	       //   dd($couponCode);
	          
	          	$status_updated= DB::table('coupons')->where('code_name', 1)->get();
                return ;
	       //   dd($request->all());
	      }
	       
	    
	    
           
}

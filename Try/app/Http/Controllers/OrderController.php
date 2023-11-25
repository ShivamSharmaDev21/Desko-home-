<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Mail;
use Illuminate\Support\Facades\Http;


class OrderController extends Controller
{
        public function index(){
           
             $user_id=session('user_id');
             $data['orders']=	DB::table('orders as o')
                            ->join('users as u','u.user_id','=','o.user_id')
                            ->where('o.user_id',$user_id)
                            ->orderBy('o.order_id','desc')
                            ->select('u.*','o.*')
                            //->paginate(2);
                            ->get();
            // echo "<pre>";print_r( $data['orders']);die;
          
            return view('my-order',$data);
        }
         public function orderSuccess($order_id){
            $data['order'] = $pro = DB::table('orders as od')
                                        ->where('od.order_id', $order_id)
                                        ->select('od.*')
                                        ->first();
                                        $this->sendWhatsappMsg($order_id);
            $cart = $pro = DB::table('order_details')
                            ->where('order_id', $order_id)
                            ->where(function($query) {
                                $query->where('iteam_type', 'Top')
                                      ->orWhere('iteam_type', 'product');
                            })
                            ->select(DB::raw('SUM(quantity) as quantity'),'desk_cart_id')
                            ->first();
            //$data['cart_prod'] = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.iteam_type','Product')->where('cart_status',0)->where('c.user_id',$user_id)->select('c.*','p.*')->get();
            $data['order_qty'] = $cart;
            
            $desk_cart_updated = DB::table('desk_cart')->where('desk_cart_id',$cart->desk_cart_id)->update(['status' => 5]);
            $cart_deleted = DB::table('cart')->where('desk_cart_id',$cart->desk_cart_id)->update(['cart_status' => 5]);
            
            
            return view('order_success',$data);
         }
         
         //Api to send msg on whatsapp 
         public function sendWhatsappMsg($order_id){
            
          $pro = DB::table('orders as o')
                    ->where('o.order_id', $order_id)
                    ->join('users as u','u.user_id','=','o.user_id')
                    ->join('address as a','a.address_id','=','o.address_id')
                    ->join('state_tbl as s','a.state','=','s.s_id')
                    ->join('city_tbl as c','a.city','=','c.id')
                    ->select('o.*')
                    ->select('a.fname','a.lname','o.*','a.email','a.mobile','a.address','a.pincode','s.name as state_name','c.name as city_name')   
                    ->first();
                                        
                                        
                                        
            $phoneNumber = !empty($pro->mobile) ? $pro->mobile : '9971784581';
            $fname = !empty($pro->fname) ? ucfirst($pro->fname) : '';
            $lname = !empty($pro->lname) ? ucfirst($pro->lname) : '';
            $name = $fname .' '. $lname  ;
            $url = 'https://deskohome.com/download_invoice/'.$order_id;
            $fileName = "Invoce";

            
            //  $phoneNumber = '9971784581';

            // $amount = $pro->sub_total;
            // $params1 = [
            //     'apiKey' => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY0ODZhM2RmMDBlOGMyN2YzOTNkMjBmMyIsIm5hbWUiOiJEZXNrbyIsImFwcE5hbWUiOiJBaVNlbnN5IiwiY2xpZW50SWQiOiI2NDg2YTNkZjAwZThjMjdmMzkzZDIwZWUiLCJhY3RpdmVQbGFuIjoiQkFTSUNfTU9OVEhMWSIsImlhdCI6MTY4NjU0NTM3NX0.NtqrUUEA_zBgl3nxQrh0zanSFqPDqCZXbq5Q0oKEELE",
            //     'campaignName' =>"Payment Confirmation 1",
            //     'destination' => $phoneNumber,
            //     'userName' => "getdesko@gmail.com",
            //     'templateParams' => [ $name , "Desko", $amount ]
            // ];
            
            // $response = Http::post('https://backend.aisensy.com/campaign/t1/api/v2', $params1);
            
            
            
            
            

            $amount = $pro->sub_total;
            $params1 = [
                'apiKey' => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY0ODZhM2RmMDBlOGMyN2YzOTNkMjBmMyIsIm5hbWUiOiJEZXNrbyIsImFwcE5hbWUiOiJBaVNlbnN5IiwiY2xpZW50SWQiOiI2NDg2YTNkZjAwZThjMjdmMzkzZDIwZWUiLCJhY3RpdmVQbGFuIjoiQkFTSUNfTU9OVEhMWSIsImlhdCI6MTY4NjU0NTM3NX0.NtqrUUEA_zBgl3nxQrh0zanSFqPDqCZXbq5Q0oKEELE",
                'campaignName' =>"Invoice 1",
                'destination' => $phoneNumber,
                'userName' => "getdesko@gmail.com",
                'templateParams' => [ $name , "Desko", $amount ],
                'media'         =>  [ 'url' => $url , 'filename' => $fileName]
            ];
            $response = Http::post('https://backend.aisensy.com/campaign/t1/api/v2', $params1);
                   
         }
        
         public function placeOrder(Request $request){
           
              $user_id = session('user_id');
             if(!$user_id){
                  $user = DB::table('users')->where('mobile',$request->mobile)->first();
                 if($user){
                     $user_id = $user->user_id;
                     $request->session()->put('user_id', $user->user_id);
	                   $request->session()->put('fname', $user->fname);
	                   $request->session()->put('lname', $user->lname);
	                   $request->session()->put('email',$user->email);
	                   $request->session()->put('mobile',$user->mobile);
	                   $request->session()->put('image',$user->image);
                 }else{
                 $user_data=['fname'   => $request->fname, 'lname'   => $request->lname,'email'   => $request->email,'password'   => "202cb962ac59075b964b07152d234b70",'mobile'   => $request->mobile, 'status'   => 1];
                  $user_id =  DB::table('users')->insertGetId($user_data);
                  if($user_id){
                      $request->session()->put('user_id', $user_id);
	                   $request->session()->put('fname', $request->fname);
	                   $request->session()->put('lname', $request->lname);
	                   $request->session()->put('email',$request->email);
	                   $request->session()->put('mobile',$request->mobile);
	                   //$request->session()->put('image',$request->image);
                  }
                 }
             }
            //  die;
             $sub_total =  ($request->sub_total)?$request->sub_total:'';
             $installetion =  ($request->installation)?$request->installation:'';
             $address_id =  ($request->address_id)?$request->address_id:'';
            //  echo '<pre>';
            //  print_r($request->installation);
            //  echo '</pre>';
            //  die;
             if(!empty($address_id)){
                 $itm_uparr=['fname'   => $request->fname, 'lname'   => $request->lname,'email'   => $request->email,'mobile'   => $request->mobile,'address'   => $request->address, 'city'   => $request->city,'state'   => $request->state, 'country'   => $request->country,'pincode'   => $request->pincode, 'updated_at'   => date('Y-m_d')];
                
            $address= DB::table('address')->where('address_id',$address_id)->update($itm_uparr);
             }else{
                  $itm_inarr=[ 'user_id'   => $user_id,'fname'   => $request->fname, 'lname'   => $request->lname, 'email'   => $request->email, 'mobile'   => $request->mobile,'address'   => $request->address,'city'   => $request->city, 'state'   => $request->state,'country'   => $request->country,'pincode'   => $request->pincode, 'default_status'   => 1,'status'   => 1, 'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];
                  
            $address_id= DB::table('address')->where('address_id',$address_id)->insertGetId($itm_inarr);
             }
              if(!empty($sub_total)){
                  if($installetion==1){
                      $sub_total+=900;
                  } 
              $itm_ordarr=[ 'user_id'=>$user_id,'sub_total'=>$sub_total, 'payment_method'=>0, 'address_id'=>$address_id,'installation'=>$installetion,'order_status'=>4,'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];  
              $order_id= DB::table('orders')->insertGetId($itm_ordarr);
              $cart_prod = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.iteam_type','Product')->where('c.cart_status',0)->where('c.user_id',$user_id)->select('c.id','c.qty','p.*')->get();
                if(!$cart_prod->isEmpty()){
                    foreach($cart_prod as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Product','quantity'=>$cart->qty,'offer_price'=>$cart->offer_price,'iteam_total'=>($cart->qty*$cart->offer_price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    $cart_deleted = DB::table('cart')->where('id',$cart->id)->where('user_id',$user_id)->update(['cart_status' => 1]);
                    }
                }
             $cart_top = DB::table('cart as c')->join('top_gallery as t','t.id','=','c.prod_id')->join('desktops as dt','dt.top_id','=','t.top_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Top')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','t.*','dt.*')->get();
                if(!$cart_top->isEmpty()){
                    foreach($cart_top as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Top', 'desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'iteam_colour'=>$cart->colour_id,'iteam_material'=>$cart->top_material,'offer_price'=>$cart->top_price,'iteam_total'=>($cart->qty*$cart->top_price),'created_at'=>date('Y-m_d'),'updated_at'=>date('Y-m_d')];      
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    $cart_updated = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 1]);
                    $desk_cart_updated = DB::table('desk_cart')->where('desk_cart_id',$cart->desk_cart_id)->where('user_id',$user_id)->update(['status' => 1]);
                    }
                } 
            $cart_bottom = DB::table('cart as c')->join('bottom_gallery as b','b.id','=','c.prod_id')->join('deskbottoms as db','db.bottom_id','=','b.bottom_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Bottom')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','b.*','db.*')->get();
                if(!$cart_bottom->isEmpty()){
                    foreach($cart_bottom as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Bottom','desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'iteam_colour'=>$cart->colour_id,'iteam_material'=>$cart->bottom_material,'offer_price'=>$cart->bottom_price,'iteam_total'=>($cart->qty*$cart->bottom_price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    $cart_deleted = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 1]);
                    }
                }
            $cart_smart = DB::table('cart as c')->join('smart_features as s','s.id','=','c.prod_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Smart_feature')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','s.*')->get();
                if(!$cart_smart->isEmpty()){
                    foreach($cart_smart as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Smart_feature','desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'offer_price'=>$cart->price,'iteam_total'=>($cart->qty*$cart->price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    $cart_deleted = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 1]);
                    }
                }
                $eol = "\r\n";
                $separator = md5(time());
                $filename = "example.pdf";
                
                $data["email"] = "thinkdebugshubham@gmail.com";
                $data["title"] = "From deskohome.com";
                $data["body"] = "This is Demo";
  
                     $pdf = PDF::loadView('emails.myTestMail', $data);
                  $pdfdoc = $pdf->output();
                    $attachment = chunk_split(base64_encode($pdfdoc));
                //order email to user
                         $email_tmp= $pro = DB::table('email_templates_tbl')->select('*')->first();
                         $to = "thinkdebugshubham@gmail.com";
                        //$to = "ajay.thindebug@gmail.com";
                         $subject = "Deskohome";
                         $msg='Congratulations ! Your order placed successfully..';
                         $message = $email_tmp->header_temp.$msg.$email_tmp->footer_temp;
                         // Always set content-type when sending HTML email
                        $headers  = "From: ".'jafarkhan17861@gmail.com'.$eol;
                        $headers .= "MIME-Version: 1.0".$eol; 
                        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol; 
                        $headers .= "Content-Transfer-Encoding: 7bit".$eol;
                        $headers .= "This is a MIME encoded message.".$eol;

// message
// $headers .= "--".$separator.$eol;
// $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
// $headers .= "Content-Transfer-Encoding: 8bit".$eol;
// $headers .= $message.$eol;

// // attachment
// $headers .= "--".$separator.$eol;
// $headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
// $headers .= "Content-Transfer-Encoding: base64".$eol;
// $headers .= "Content-Disposition: attachment".$eol;
// $headers .= $attachment.$eol;
// $headers .= $separator.$eol;

                         if(mail($to,$subject,$message,$headers)){
                            // echo "mail success" ;
                         }else{
                        //   echo "mail fail" ;   
                         }

        
       
        //   echo "<pre>"; print_r($email_tmp);
        // die;
  
                          
                                        
            //////////////////////////////////////////////////////////
                 return \redirect('/order_success/'.$order_id)->with('success', 'Order placed successfully !.'); 
                
              }else{
                  return \back()->with('fail', 'Failed to place order.Please add some products to your cart.'); 
              }
             
             
         }
         public function placeOrder_checkout(Request $request){
             if(empty($request->all())) {
                return redirect('/');
            }
             
              $user_id = session('user_id');
              $guest_user = session('guest_user');
            //     echo '<pre>';
            //  print_r($request->all());
            //  echo '<pre>';
           
             if(!$user_id)
             {
                  $user = DB::table('users')->where('mobile',$request->mobile)->first();
                  
                 if($user){
                      $user_id = $user->user_id;
                    //  $request->session()->put('user_id', $user->user_id);
	                   //$request->session()->put('fname', $user->fname);
	                   //$request->session()->put('lname', $user->lname);
	                   //$request->session()->put('email',$user->email);
	                   //$request->session()->put('mobile',$user->mobile);
	                   //$request->session()->put('image',$user->image);
	                   // commented on 9th feb 2023 to test address and username
	                   
	                   //$request->session()->put('user_id', $user_id);
	                   $request->session()->put('fname', $request->fname);
	                   $request->session()->put('lname', $request->lname);
	                   $request->session()->put('email',$request->email);
	                   $request->session()->put('mobile',$request->mobile);
	                   //$request->session()->put('image',$request->image);
	                   
	                   
                 }else{
                    //   die;
                 $user_data=['fname'   => $request->fname, 'lname'   => $request->lname,'email'   => $request->email,'password'   => "202cb962ac59075b964b07152d234b70",'mobile'   => $request->mobile, 'status'   => 1];
                  $user_id =  DB::table('users')->insertGetId($user_data);
                 }
                  if($user_id){
                      $cart_item = DB::table('cart')->where('user_id',$guest_user)->get();
                        if($cart_item) 
                        {
                            foreach($cart_item as $cart_it){ 
                                // print_r($cart_it);
                                $cart_update = DB::table('cart')->where('id',$cart_it->id)->update(['user_id' => $user_id]);
                            }
                        }
                      $deskcart_item = DB::table('desk_cart')->where('user_id',$guest_user)->get();
                     if($deskcart_item) 
                        {
                          foreach($deskcart_item as $deskcart_it){ 
                            //   print_r($deskcart_it);
                             $deskcart_update = DB::table('desk_cart')->where('desk_cart_id',$deskcart_it->desk_cart_id)->update(['user_id' => $user_id]);
                          }
                        }
                      $request->session()->put('user_id', $user_id);
	                   $request->session()->put('fname', $request->fname);
	                   $request->session()->put('lname', $request->lname);
	                   $request->session()->put('email',$request->email);
	                   $request->session()->put('mobile',$request->mobile);
	                   //$request->session()->put('image',$request->image);
                  }
                 
             }
            //  die;
             $sub_total =  ($request->sub_total)?$request->sub_total:'';
             $installetion =  ($request->installation)?$request->installation:'';
             $address_id =  ($request->address_id)?$request->address_id:'';
             $gstin =  ($request->GSTIN)?$request->GSTIN:'';
             $comp_name =  ($request->company)?$request->company:'';
            
                  $itm_inarr=[ 'user_id'   => $user_id,'fname'   => $request->fname, 'lname'   => $request->lname, 'email'   => $request->email, 'mobile'   => $request->mobile,'address'   => $request->address,'city'   => $request->city, 'state'   => $request->state,'country'   => $request->country,'pincode'   => $request->pincode, 'default_status'   => 1,'status'   => 1, 'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];
              $data['user_details'] = $itm_inarr ;  
                  
            $address_id= DB::table('address')->where('address_id',$address_id)->insertGetId($itm_inarr);
             //}
              if(!empty($sub_total)){
                  if($installetion==1){
                      $sub_total+=900;
                  }
            $insqty = 0;
            $cart_top = DB::table('cart as c')->join('top_gallery as t','t.id','=','c.prod_id')->join('desktops as dt','dt.top_id','=','t.top_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Top')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','t.*','dt.*')->get();
                // print_r($cart_top->isEmpty());
                if(!$cart_top->isEmpty()){
                    foreach($cart_top as $cart){
                      $insqty =   $cart->qty;
                    }
                }
             $ins_amount = 900*$insqty;
              $itm_ordarr=[ 'user_id'=>$user_id,'sub_total'=>$sub_total, 'payment_method'=>0, 'address_id'=>$address_id,'installation'=>$installetion,'gstin'=>$gstin,'comp_name'=>$comp_name,'order_status'=>4,'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d'), 'ins_amount' => $ins_amount];    
              $order_id_qry = DB::table('orders')->select('order_id')->where('sub_total', $sub_total)->where('user_id', $user_id)->where('order_status', '4')->orderBy('order_id', 'desc')->first();
              if($order_id_qry){
                      $order_id = $order_id_qry->order_id;
              }
              else
              {
              $order_id= DB::table('orders')->insertGetId($itm_ordarr);
              }
              
              
              $cart_prod = DB::table('cart as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.iteam_type','Product')->where('c.cart_status',0)->where('c.user_id',$user_id)->select('c.id','c.qty','p.*')->get();
                if(!$cart_prod->isEmpty()){
                    foreach($cart_prod as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Product','quantity'=>$cart->qty,'offer_price'=>$cart->offer_price,'iteam_total'=>($cart->qty*$cart->offer_price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $arr_chk = ['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id];
                    if (! DB::table('order_details')->where($arr_chk)->exists()) {
                        $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    }
                    $cart_deleted = DB::table('cart')->where('id',$cart->id)->where('user_id',$user_id)->update(['cart_status' => 1]);
                    }
                }
             $cart_top = DB::table('cart as c')->join('top_gallery as t','t.id','=','c.prod_id')->join('desktops as dt','dt.top_id','=','t.top_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Top')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','t.*','dt.*')->get();
                // print_r($cart_top->isEmpty());
                if(!$cart_top->isEmpty()){
                    foreach($cart_top as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Top', 'desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'iteam_colour'=>$cart->colour_id,'iteam_material'=>$cart->top_material,'offer_price'=>$cart->top_price,'iteam_total'=>($cart->qty*$cart->top_price),'created_at'=>date('Y-m_d'),'updated_at'=>date('Y-m_d')];      
                    $arr_chk = ['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id];
                    if (! DB::table('order_details')->where($arr_chk)->exists()) {
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    }
                    $cart_updated = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 2]);
                    $desk_cart_updated = DB::table('desk_cart')->where('desk_cart_id',$cart->desk_cart_id)->where('user_id',$user_id)->update(['status' => 4,'order_id'=>$order_id]);
                    }
                } 
            $cart_bottom = DB::table('cart as c')->join('bottom_gallery as b','b.id','=','c.prod_id')->join('deskbottoms as db','db.bottom_id','=','b.bottom_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Bottom')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','b.*','db.*')->get();
                if(!$cart_bottom->isEmpty()){
                    foreach($cart_bottom as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Bottom','desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'iteam_colour'=>$cart->colour_id,'iteam_material'=>$cart->bottom_material,'offer_price'=>$cart->bottom_price,'iteam_total'=>($cart->qty*$cart->bottom_price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $arr_chk1 = ['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id];
                    if (! DB::table('order_details')->where($arr_chk1)->exists()) {
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);    
                    }
                    $cart_deleted = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 2]);
                    }
                }
            $cart_smart = DB::table('cart as c')->join('smart_features as s','s.id','=','c.prod_id')->where('c.cart_status',0)->where('c.user_id',$user_id)->where('c.iteam_type','Smart_feature')->select('c.id as cart_id','c.qty','c.user_id','c.prod_id','c.desk_cart_id','s.*')->get();
                if(!$cart_smart->isEmpty()){
                    foreach($cart_smart as $cart){
                    $itm_ord_det_arr=['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id, 'iteam_type'=>'Smart_feature','desk_cart_id'=>$cart->desk_cart_id,'quantity'=>$cart->qty,'offer_price'=>$cart->price,'iteam_total'=>($cart->qty*$cart->price),'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];      
                    $arr_chk2 = ['order_id'=>$order_id,'user_id'=>$user_id,'iteam_id'=>$cart->prod_id];
                    if (! DB::table('order_details')->where($arr_chk2)->exists()) {
                    $order_detail_id= DB::table('order_details')->insertGetId($itm_ord_det_arr);
                    }
                    $cart_deleted = DB::table('cart')->where('id',$cart->cart_id)->where('user_id',$user_id)->update(['cart_status' => 2]);
                    }
                }
                $eol = "\r\n";
                $separator = md5(time());
                $filename = "example.pdf";
                
                $data["email"] = "thinkdebugshubham@gmail.com";
                $data["title"] = "From deskohome.com";
                $data["body"] = "This is Demo";
  
                     $pdf = PDF::loadView('emails.myTestMail', $data);
                  $pdfdoc = $pdf->output();
                    $attachment = chunk_split(base64_encode($pdfdoc));
                //order email to user
                         $email_tmp= $pro = DB::table('email_templates_tbl')->select('*')->first();
                         $to = "thinkdebugshubham@gmail.com";
                        //$to = "ajay.thindebug@gmail.com";
                         $subject = "Deskohome";
                         $msg='Congratulations ! Your order placed successfully..';
                         $message = $email_tmp->header_temp.$msg.$email_tmp->footer_temp;
                         // Always set content-type when sending HTML email
                        $headers  = "From: ".'jafarkhan17861@gmail.com'.$eol;
                        $headers .= "MIME-Version: 1.0".$eol; 
                        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol; 
                        $headers .= "Content-Transfer-Encoding: 7bit".$eol;
                        $headers .= "This is a MIME encoded message.".$eol;

// message
// $headers .= "--".$separator.$eol;
// $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
// $headers .= "Content-Transfer-Encoding: 8bit".$eol;
// $headers .= $message.$eol;

// // attachment
// $headers .= "--".$separator.$eol;
// $headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
// $headers .= "Content-Transfer-Encoding: base64".$eol;
// $headers .= "Content-Disposition: attachment".$eol;
// $headers .= $attachment.$eol;
// $headers .= $separator.$eol;

                         if(mail($to,$subject,$message,$headers)){
                            // echo "mail success" ;
                         }else{
                        //   echo "mail fail" ;   
                         }

        
       
        //   echo "<pre>"; print_r($email_tmp);
        // die;       
        $data['sub_total'] = $sub_total ;
        $data['address_details'] = $request->fname.' '.$request->lname.' '.$request->address.' '.$request->pincode;
            $user_id=(session('user_id'))?session('user_id'):session('guest_user');
         $data['address'] = DB::table('address')->where('user_id',$user_id)->where('status',1)->orderBy('address_id', 'desc')->first();
         $data['cart_prod'] = DB::table('order_details as c')->join('products as p','p.prod_id','=','c.iteam_id')->where('c.iteam_type','Product')->where('c.order_id',$order_id)->where('c.user_id',$user_id)->select('c.*','p.*')->get();
         $data['bottom'] = DB::table('order_details as c')->leftJoin('bottom_gallery as b','b.id','=','c.iteam_id')->leftJoin('deskbottoms as d','b.bottom_id','=','d.bottom_id')->where('c.order_id',$order_id)->where('c.iteam_type','Bottom')->where('c.user_id',"$user_id")->select('c.*','d.bottom_name')->get();
         $data['top'] = DB::table('order_details as c')->leftJoin('top_gallery as t','t.id','=','c.iteam_id')->leftJoin('desktops as d','t.top_id','=','d.top_id')->where('c.order_id',$order_id)->where('c.iteam_type','Top')->where('c.user_id',"$user_id")->select('c.*','d.top_name')->get();
         $data['smart_prod'] = DB::table('order_details as c')->leftJoin('products as p','p.prod_id','=','c.iteam_id')->leftJoin('smart_features as f','f.id','=','c.iteam_id')->where('c.iteam_type','Smart_feature')->where('c.order_id',$order_id)->where('c.user_id',$user_id)->select('c.*','p.*','f.feature_name')->get();
        //$data['desk_cart'] = DB::table('desk_cart')->where('user_id',$user_id)->where('status',4)->where('order_id',$order_id)->select('*')->get();
        $data['desk_cart'] = DB::table('desk_cart')->where('user_id',$user_id)->where('status',4)->where('order_id',$order_id)->select('*')->orderBy('desk_cart_id', 'desc')->limit(1)->get();
        $data['order_details'] = DB::table('orders')->where('order_id',$order_id)->select('*')->first();
            $data['state'] = DB::table('state_tbl')->get();
            $data['order_id'] = $order_id;
            if(isset($data['address']->state)){
            $data['city'] = DB::table('city_tbl')->where('state_id', $data['address']->state)->get();
            }
                   
                //   echo '<pre>';
                //   print_r($data);
                //   echo '<pre>';
                //   die;
            //////////////////////////////////////////////////////////
                //  return \redirect('/order_success/'.$order_id)->with('success', 'Order placed successfully !.'); 
                  return view('payment-method',$data);
       
                
              }else{
                  return \back()->with('fail', 'Failed to place order.Please add some products to your cart.'); 
              }
             
             
         }
          public function orderDetail($order_id){
        //  echo $order_id;die;
            $data['order']= $pro = DB::table('orders as od')
                                                ->where('od.order_id', $order_id)
                                                ->select('od.*')
                                                ->first();
            $data['prod_details']= $pro = DB::table('order_details as od')
                                            ->join ('orders as o','o.order_id','=','od.order_id')
                                            ->join ('products as p','p.prod_id','=','od.iteam_id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order_id)
                                            ->where('od.iteam_type','Product')
                                            ->select('p.*','od.*','o.*')
                                            ->get();
            $desk_cart_ids=DB::table('order_details')->where('iteam_type','Top')->where('order_id',$order_id)->select('desk_cart_id')->get();
           
             if(!$desk_cart_ids->isEmpty()){
                 foreach($desk_cart_ids as $desk_cart_id){
                    $data['desk_details'][] = DB::table('desk_cart')
                                        ->where('desk_cart_id', $desk_cart_id->desk_cart_id)
                                        ->select('*')
                                        ->first();
                    
                                       
                 }
                // echo "<pre>"; print_r($data['desk_details']);die;
             }
            $data['address']=	DB::table('address as a')
                            ->join('orders as o','o.address_id','=','a.address_id')
                            ->join('city_tbl as c','c.id','=','a.city')    
                            ->join('state_tbl as s','s.s_id','=','a.state')    
                            ->where('o.order_id',$order_id)
                            ->select('a.*','c.name as city_name','s.name as state_name','o.created_at as order_date','o.address_id')
                            ->get();
                            
        //     echo "<pre>";
        //   print_r($data);die;
            return view('order-detail',$data);
        }
        
         ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          
       
      
         public function trackOrder($order_id){
             //echo $order_id;die;
            $data['tracking']=$dat=	DB::table('orders')
                            ->where('orders.order_id', $order_id)
                            ->select('orders.order_status')
                            ->get();
            $data['prod_details']= $pro = DB::table('order_details as od')
                                            ->join ('orders as o','o.order_id','=','od.order_id')
                                            ->join ('products as p','p.prod_id','=','od.iteam_id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order_id)
                                            ->where('od.iteam_type','Product')
                                            ->select('p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                            ->get();
            $data['top_details'] = DB::table('order_details as od')
                                    ->join('orders as o','o.order_id','=','od.order_id')
                                    ->join('desktops as dt','dt.top_id','=','od.iteam_id')
                                    ->join('colours as c','c.id','=','od.iteam_colour')
                                    ->join('materials as m','m.id','=','od.iteam_material')
                                    ->orderBy('od.order_detail_id','desc')
                                    ->where('od.order_id', $order_id)
                                    ->where('od.iteam_type','Top')
                                    ->select('dt.top_name','c.colour_name','m.material_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                    ->get();
            $data['bottom_details'] = DB::table('order_details as od')
                                    ->join('orders as o','o.order_id','=','od.order_id')
                                    ->join('deskbottoms as db','db.bottom_id','=','od.iteam_id')
                                    ->join('colours as c','c.id','=','od.iteam_colour')
                                    ->join('materials as m','m.id','=','od.iteam_material')
                                    ->orderBy('od.order_detail_id','desc')
                                    ->where('od.order_id', $order_id)
                                    ->where('od.iteam_type','Bottom')
                                    ->select('db.bottom_name','c.colour_name','m.material_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                    ->get(); 
            $data['feature_details'] = DB::table('order_details as od')
                                    ->join('orders as o','o.order_id','=','od.order_id')
                                    ->join('smart_features as sf','sf.id','=','od.iteam_id')
                                    ->orderBy('od.order_detail_id','desc')
                                    ->where('od.order_id', $order_id)
                                    ->where('od.iteam_type','Smart-Feature')
                                    ->select('sf.feature_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                    ->get(); 
            $data['address']=	DB::table('address as a')
                            ->join('orders as o','o.address_id','=','a.address_id')
                            ->join('city_tbl as c','c.id','=','a.city')    
                            ->join('state_tbl as s','s.s_id','=','a.state')    
                            ->where('o.order_id',$order_id)
                            ->select('a.*','c.name as city_name','s.name as state_name','o.created_at as order_date','o.address_id')
                            ->get();
                            
        //     echo "<pre>";
        //   print_r($data);die;
            return view('track_order',$data); 
             
         }
         public function viewIteamReview($iteam_type,$iteam_id,$user_id){
            
              $data['reviews']=	DB::table('reviews as r')
                            ->join('users as u','u.user_id','=','r.user_id')    
                            ->where('r.user_id',$user_id )
                            ->where('r.iteam_id',$iteam_id )
                            ->where('r.iteam_type',$iteam_type )
                            ->select('r.*','u.fname','u.lname')
                            ->get();
        //   echo "<pre>";
        //   print_r($data);die;
             return view('view_iteam_review',$data);
         }
          public function changeReviewStatus(Request $request){
            $status_updated= DB::table('reviews')->where('review_id', $request->review_id)->update(['status' => $request->str]);

              if ($status_updated) {
                      echo json_encode(['status'=>true]) ;
                    }
         }
        public function changeOrderStatus(Request $request){
            $status_updated= DB::table('orders')->where('order_id', $request->order_id)->update(['order_status' => $request->str]);

              if ($status_updated) {
                      echo json_encode(['status'=>true]) ;
                    }
        }
        
        public function downloadInvoice( Request $request , $order_id) {
             
            // DOwnload invoice 
            // $data = ['title' => 'Generated PDF'];
            // $pdf = PDF::loadView('invoice_pdf');
            // return $pdf->download('Desk_invoice.pdf');
            
            $data['order'] = $pro = DB::table('orders as o')
                                        ->where('o.order_id', $order_id)
                                        ->join('users as u','u.user_id','=','o.user_id')
                                        ->join('address as a','a.address_id','=','o.address_id')
                                        ->join('state_tbl as s','a.state','=','s.s_id')
                                        ->join('city_tbl as c','a.city','=','c.id')
                                        ->select('o.*')
                                        ->select('a.fname','a.lname','o.*','a.email','a.mobile','a.address','a.pincode','s.name as state_name','c.name as city_name')   
                                        ->first();
            $cart = $pro = DB::table('order_details as od')
                            ->where('order_id', $order_id)
                            ->where(function($query) {
                                $query->where('iteam_type', 'Top')
                                      ->orWhere('iteam_type', 'product' , 'od.*');
                            })
                            ->select(DB::raw('SUM(quantity) as quantity'),'desk_cart_id')
                            ->first();
            $data['order_qty'] = $cart;
            
            
            foreach($pro as $order){
                $arr['order_details'] = $order; 
                $str = '';
                $prod =  DB::table('order_details as od')
                                            ->leftJoin ('orders as o','o.order_id','=','od.order_id')
                                            ->leftJoin ('products as p','p.prod_id','=','od.iteam_id')
                                            ->leftJoin ('desk_cart as d','od.desk_cart_id','=','d.desk_cart_id')
                                            ->leftJoin ('smart_features as s','od.iteam_id','=','s.id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order_id)
                                            ->where('od.iteam_type','Smart_feature')
                                            ->select('s.feature_name','d.captured_desk_img','p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                            ->get();
                $product =  DB::table('order_details as od')
                                            ->leftJoin ('orders as o','o.order_id','=','od.order_id')
                                            ->leftJoin ('products as p','p.prod_id','=','od.iteam_id')
                                            ->leftJoin ('desk_cart as d','od.desk_cart_id','=','d.desk_cart_id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order_id)
                                            ->where('od.iteam_type','Product')
                                            ->select('d.captured_desk_img','p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                            ->get();
                $bottom = DB::table('order_details as c')->leftJoin('bottom_gallery as b','b.id','=','c.iteam_id')->leftJoin('deskbottoms as d','b.bottom_id','=','d.bottom_id')->where('c.order_id',$order_id)->where('c.iteam_type','Bottom')->select('c.*','d.bottom_name')->get();
                $tops = DB::table('order_details as c')->leftJoin('top_gallery as t','t.id','=','c.iteam_id')->leftJoin('desktops as d','t.top_id','=','d.top_id')->where('c.order_id', $order_id )->where('c.iteam_type','Top')->select('c.*','d.top_name')->get();
                if(count($tops)>0){
                    $topdetails;
                    foreach($tops as $top){
                        $topdetails=$top;
                    }
                    $str= 'Top - '.$topdetails->top_name.'('.$topdetails->iteam_colour.')';
                }
                
                if(count($bottom)>0){
                    $botdetails;
                    foreach($bottom as $bot){
                        $botdetails=$bot;
                    }
                    $str = $str.'Bottom - '.$botdetails->bottom_name.'('.$topdetails->iteam_colour.')';
                }
                
                $smart=array();
                if($prod){
                  foreach($prod as $pro){
                      if($pro->iteam_type=='Smart_feature'){
                          $str = $str.','. $pro->feature_name;
                      }
                  } 
                }
                
                if($product){
                  foreach($product as $produ){
                      if($produ->iteam_type=='Product'){
                          $str = $str.','. $produ->prod_name;
                      }
                  } 
                }
                                   
                $data['top'] =  $str;
                
                $orders[] = $arr;
                
            }
            
            
            $data['title'] = 'Generated PDF';
            $pdf = PDF::loadView('invoice_pdf',$data);
            $pdf->setPaper('A4', 'landscape');
            return $pdf->download('Desk_invoice.pdf');
            
            
            return view('invoice_pdf',$data);

            
            
            
            
            // dd($request->id);
         
            // $data = ['title' => 'Generated PDF'];
            // $pdf = PDF::loadView('invoice_pdf');
            // return $pdf->download('generated.pdf');
    
         
            // $pdf = PDF::loadView('invoice_pdf');
            //  $pdfdoc = $pdf->output();
          
            // $pdf = new PDF();

            // // Set content and options (adjust as needed)
            // $content = '<html><body><h1>Generated PDF</h1></body></html>';
            // $pdf->WriteHTML($content);
    
            // // Output PDF for download
            // header('Content-Type: application/pdf');
            // header('Content-Disposition: attachment; filename="generated.pdf"');
            // echo $pdf->Output('', 'S');
                  
        }
        
      
        
        
           
}

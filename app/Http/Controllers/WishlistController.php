<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
        public function index(){
            $user_id=(session('user_id'))?session('user_id'):session('guest_user');
      //echo $user_id;die;
       $data['wish_prod'] = DB::table('wishlist as c')->join('products as p','p.prod_id','=','c.prod_id')->where('c.user_id',$user_id)->select('c.*','p.*')->get();
      
         //echo "<pre>";print_r($data);die;
       return view('view-wishlist',$data);
        }
          public function wishToCart(){
             $user_id=(session('user_id'))?session('user_id'):session('guest_user');  
             $wish_prod = DB::table('wishlist')->where('user_id',$user_id)->select('*')->get();
             foreach($wish_prod as $wish){
                $cart_prod = DB::table('cart')->where('user_id',$user_id)->where('prod_id',$wish->prod_id)->where('cart_status',0)->where('iteam_type','Product')->select('*')->get(); 
                 if(!$cart_prod->isEmpty()){ 
                    $new_qty= $wish->qty + $cart_prod[0]->qty;
                    $status_updated= DB::table('cart')->where('id',$cart_prod[0]->id)->update(['qty' => $new_qty]);
                 }else{
                    $itm_arr=array(
                            'prod_id'   => $wish->prod_id,
                            'user_id'   => $user_id,
                            'qty'       => $wish->qty,
                            'iteam_type'       => 'Product'
                            );
                    $wish=DB::table('cart')->insert($itm_arr); 
                 }
             }
              return \redirect('/view-cart')->with('success', 'Product Added to cart successfully!');
          }
            public function changeWishQty(Request $request){
         $cart_id=$request->cart_id;
         $qty=$request->current_val;
         $iteam_type=$request->iteam_type;
         $action=$request->action;
         if($iteam_type=='prod'){
          // echo "cartid=".$cart_id."qty=".$qty;die;
         $status_updated= DB::table('wishlist')->where('id',$cart_id)->update(['qty' => $qty]);
         echo true;   
         }
          
        
    }
          public function removeWish($iteam_type,$wish_id){
    //   $user_id=(session('user_id'))?session('user_id'):session('temp_user_id');
     $user_id=(session('user_id'))?session('user_id'): session('guest_user');
       if($iteam_type=='prod'){
           $cart_deleted = DB::table('wishlist')->where('id',$wish_id)->where('user_id',$user_id)->delete();
        // echo "<pre>";print_r($data['cart_prod']);die;
            if($cart_deleted){
               return \redirect('/view-wishlist')->with('success', 'Wishlist iteam removed successfully !.'); 
            }else{
               return \back()->with('fail', 'Failed to remove wishlist iteam.'); 
            }
       }
       
      
    }
         public function addToWishlist($prod_id)
	    { 
    	        $user_id=(session('user_id'))?session('user_id'):session('guest_user');
    	       $prod_exist = DB::table('wishlist')->where('prod_id',$prod_id)->where('user_id',$user_id)->get();
    	       //print_r($prod_exist);die;
    	       if(!$prod_exist->isEmpty()){  
    	           return \redirect('/view-wishlist')->with('success', 'Product already exist in wishlist.');
    	       }else{
    	     $itm_arr=array(
                            'prod_id'   => $prod_id,
                            'user_id'   => $user_id,
                            'qty'      => 1
                            );
             $wish=DB::table('wishlist')->insert($itm_arr);
             if($wish){
                 return \redirect('/view-wishlist')->with('success', 'Product Added to wishlist successfully!');
             }else{
                 return \back()->with('fail', 'Failed to add to wishlist.'); 
             }
    	    }
	    }

}

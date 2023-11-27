<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
        public function index(){
            // $videos=Video::orderBy('id','desc')->get();
            $orderss =	DB::table('orders as o')
                            ->join('users as u','u.user_id','=','o.user_id')
                            ->join('address as a','a.address_id','=','o.address_id')
                            ->join('state_tbl as s','a.state','=','s.s_id')
                            ->join('city_tbl as c','a.city','=','c.id')
                            ->orderBy('o.order_id','desc')
                            ->select('a.fname','a.lname','o.*','a.email','a.mobile','a.address','a.pincode','s.name as state_name','c.name as city_name')
                            ->paginate(1000);
            $orders = array();
            foreach($orderss as $order){
             $arr['order_details'] = $order; 
             $str = '';
             $prod =  DB::table('order_details as od')
                                            ->leftJoin ('orders as o','o.order_id','=','od.order_id')
                                            ->leftJoin ('products as p','p.prod_id','=','od.iteam_id')
                                            ->leftJoin ('desk_cart as d','od.desk_cart_id','=','d.desk_cart_id')
                                            ->leftJoin ('smart_features as s','od.iteam_id','=','s.id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order->order_id)
                                            ->where('od.iteam_type','Smart_feature')
                                            ->select('s.feature_name','d.captured_desk_img','p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                            ->get();
             $product =  DB::table('order_details as od')
                                            ->leftJoin ('orders as o','o.order_id','=','od.order_id')
                                            ->leftJoin ('products as p','p.prod_id','=','od.iteam_id')
                                            ->leftJoin ('desk_cart as d','od.desk_cart_id','=','d.desk_cart_id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order->order_id)
                                            ->where('od.iteam_type','Product')
                                            ->select('d.captured_desk_img','p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
                                            ->get();
          $bottom = DB::table('order_details as c')->leftJoin('bottom_gallery as b','b.id','=','c.iteam_id')->leftJoin('deskbottoms as d','b.bottom_id','=','d.bottom_id')->where('c.order_id',$order->order_id)->where('c.iteam_type','Bottom')->select('c.*','d.bottom_name')->get();
         $tops = DB::table('order_details as c')->leftJoin('top_gallery as t','t.id','=','c.iteam_id')->leftJoin('desktops as d','t.top_id','=','d.top_id')->where('c.order_id',$order->order_id)->where('c.iteam_type','Top')->select('c.*','d.top_name')->get();
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
    // print_r($topdetails->top_name);
       $str = $str.'Bottom - '.$botdetails->bottom_name.'('.$topdetails->iteam_colour.')';
             }
             $smart=array();
                if($prod){
                   foreach($prod as $pro){
                       if($pro->iteam_type=='Smart_feature'){
                           $str = $str.','. $pro->feature_name;
                    //   $smart[] = $pro;    
                       }
                   } 
                }
                if($product){
                   foreach($product as $produ){
                       if($produ->iteam_type=='Product'){
                           $str = $str.','. $produ->prod_name;
                    //   $smart[] = $pro;    
                       }
                   } 
                }
                                   
           $arr['top'] =  $str;
                
            $orders[] = $arr;
                
            }
            // die;
            // echo "<pre>";   print_r($orders);die;
            $data['orders'] =  $orders;
            return view('view_orders',$data);
        }
        public function leads(){
            $orders=DB::table('leads as o')
                        ->select('o.*')
                        ->orderBy('lead_id' ,'DESC')
                        ->paginate(2000);
            return view('leads',compact('orders'));
        }
        public function viewOrderDetails($order_id){
         //echo $order_id;die;
            $data['prod_details']= $pro = DB::table('order_details as od')
                                            ->leftJoin ('orders as o','o.order_id','=','od.order_id')
                                            ->leftJoin ('products as p','p.prod_id','=','od.iteam_id')
                                            ->leftJoin ('desk_cart as d','od.desk_cart_id','=','d.desk_cart_id')
                                            ->leftJoin ('smart_features as s','od.iteam_id','=','s.id')
                                            ->orderBy('od.order_detail_id','desc')
                                            ->where('od.order_id', $order_id)
                                            // ->where('od.iteam_type','Product')
                                            ->select('s.feature_name','d.captured_desk_img','p.prod_name','od.iteam_id','od.iteam_type','od.user_id','od.quantity','od.offer_price','od.iteam_total')
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
            return view('view_order_details',$data);
        }
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
        
        
         public function downloadLead (Request $request) {
            $orders=DB::table('leads as o')
                        ->select('o.*')
                        ->orderBy('lead_id' ,'DESC')
                        ->paginate(20);
            return view('leads',compact('orders'));       
        }
      
        
        
           
}

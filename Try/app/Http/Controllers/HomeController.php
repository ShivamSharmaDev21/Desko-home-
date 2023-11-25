<?php

namespace App\Http\Controllers;

use App\Models\SmartFeature;
use App\Models\Desktop;
use App\Models\Deskbottom;
use App\Models\Product;
use App\Models\Colour;
use App\Models\Material;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        public function index(Request $request){
            // $request->session()->forget('key');
            // $data['smart_count']=SmartFeature::where('is_deleted',0)->where('status','=',1)->get()->count();
            // $data['smart_features']=SmartFeature::where('is_deleted','=',0)->where('status','=',1)->orderBy('sl_number','ASC')->get();
            // $data['desktops']=	DB::table('desktops as d')
            //                     ->join('materials as m','m.id','=','d.top_material')
            //                     ->orderBy('d.top_id','asc')
            //                     ->where('d.is_deleted','=',0)
            //                     ->where('d.top_status','=',1)
            //                     ->select('d.*','m.material_name')
            //                     ->get();
                                
            // $data['deskbottoms'] = DB::table('deskbottoms as d')
            //                     ->join('materials as m','m.id','=','d.bottom_material')
            //                     ->orderBy('d.bottom_id','asc')
            //                     ->where('d.is_deleted','=',0)
            //                     ->where('d.bottom_status','=',1)
            //                     ->select('d.*','m.material_name')
            //                     ->get();
            // $colours=Colour::orderBy('id','asc')->get();
            // foreach($colours as $c){
            //     $clr[]=$c->id;
            // }
            // $data['colour_arr']=$clr;
            // $data['products'] = Product::where('is_deleted','=',0)->where('status','=',1)->orderBy('prod_id','desc')->get();
            // $data['sliders'] = Slider::where('is_deleted','=',0)->where('slider_status','=',1)->orderBy('id','desc')->get();
            // $data['number']=DB::table('whatsapp')->first();
            // return view('index',$data);
            
            
            // Clear session key
            $request->session()->forget('key');
                
            // Fetch data efficiently
            $data['smart_count'] = SmartFeature::where('is_deleted', 0)
                ->where('status', 1)
                ->count();
            
            $data['smart_features'] = SmartFeature::where('is_deleted', 0)
                ->where('status', 1)
                ->orderBy('sl_number', 'ASC')
                ->get();
            
            $data['desktops'] = DB::table('desktops as d')
                ->join('materials as m', 'm.id', '=', 'd.top_material')
                ->where('d.is_deleted', 0)
                ->where('d.top_status', 1)
                ->select('d.*', 'm.material_name')
                ->orderBy('d.top_id', 'asc')
                ->get();
            
            $data['deskbottoms'] = DB::table('deskbottoms as d')
                ->join('materials as m', 'm.id', '=', 'd.bottom_material')
                ->where('d.is_deleted', 0)
                ->where('d.bottom_status', 1)
                ->select('d.*', 'm.material_name')
                ->orderBy('d.bottom_id', 'asc')
                ->get();
            
            $data['colour_arr'] = Colour::orderBy('id', 'asc')->pluck('id')->toArray();
            
            $data['products'] = Product::where('is_deleted', 0)
                ->where('status', 1)
                ->orderBy('prod_id', 'desc')
                ->get();
            
            $data['sliders'] = Slider::where('is_deleted', 0)
                ->where('slider_status', 1)
                ->orderBy('id', 'desc')
                ->get();
            
            $data['number'] = DB::table('whatsapp')->first();
            
            // Return the view with the data
            return view('index', $data);

         
        }
          public function flagshipWorkstations(Request $request){
            //   echo "<pre>";print_r(session('mobile'));die;
            //if(session('temp_user_id')){}else{$request->session()->put('temp_user_id',rand(10000,99999));}
            
            $data['total_desk_price']    = $request->total_desk_price;
            $data['top_gall_id']    =$top_gall_id = $request->top_colorradio;
            $data['bottom_gall_id'] = $bottom_gall_id = $request->bottom_colorradio;
            $data['smart_feature_ids'] = $request->addprice;
            $mobile = $request->mobile ? $request->mobile : session('mobile');
            $data['mobile'] = $mobile;
            $data['lead_image'] =	DB::table('leads')->where('contact_no','=',$mobile)->orderBy('lead_id','desc')->select('*')->first();
            $data['smart_features'] = SmartFeature::where('is_deleted','=',0)->where('status','=',1)->orderBy('id','desc')->get();
            $top_id=	DB::table('top_gallery')->where('id','=',$top_gall_id)->select('top_id')->first();
            $data['top_price'] =	DB::table('desktops')->where('top_id','=',9)->select('top_price')->first();
            $bottom_id =	DB::table('bottom_gallery')->where('id','=',$bottom_gall_id)->select('bottom_id')->first();
            $data['bottom_price'] =	DB::table('deskbottoms')->where('bottom_id','=',$bottom_id->bottom_id)->select('bottom_price')->first();
            $data['desktops'] =	DB::table('desktops as d')
                                ->join('materials as m','m.id','=','d.top_material')
                                ->orderBy('d.top_id','asc')
                                ->where('d.is_deleted','=',0)
                                ->where('d.top_status','=',1)
                                ->select('d.*','m.material_name')
                                ->get();
            $data['deskbottoms'] =	DB::table('deskbottoms as d')
                                ->join('materials as m','m.id','=','d.bottom_material')
                                ->orderBy('d.bottom_id','asc')
                                ->where('d.is_deleted','=',0)
                                ->where('d.bottom_status','=',1)
                                ->select('d.*','m.material_name')
                                ->get();
            $colours=Colour::orderBy('id','asc')->get();
            foreach($colours as $c){
                $clr[]=$c->id;
            }
            $data['colour_arr']=$clr;
             
            $data['products']=Product::where('is_deleted','=',0)->where('status','=',1)->orderBy('prod_id','desc')->get();
            //  $data['tops']=Desktop::where('is_deleted','=',0)->where('top_status','=',1)->orderBy('top_id','desc')->get();
            //  $data['bottoms']=Deskbottom::where('is_deleted','=',0)->where('bottom_status','=',1)->orderBy('bottom_id','desc')->get();
                // echo "<pre>"; print_r( $data);die;
            return view('flagship_workstations',$data);
            
          }
     public function email()
	    { 
	        $email_tmp= $pro = DB::table('email_templates_tbl')->select('*')->get();
	        
                $to = "shivamsharma9868789@gmail.com";
                $subject = "Deskohome";
                $msg='Congratulations ! Your order placed successfully.aaaaaaaaaaaaa';
                $message =$email_tmp[1]->header_temp.$msg.$email_tmp[1]->footer_temp;
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <info@deskohome.com>' . "\r\n";
               
                
                mail($to,$subject,$message,$headers);
 	       return view('email');  
	    }
    public function product_detail($url)
	    { 
	        
            $products=DB::table('products')->where('is_deleted',0)->where('url',$url)->first();
            if( !empty($products->prod_id)){
                 $product_id = $products->prod_id ;
            }else{
              $product_id =  12 ;
            }

	       $prod ;
	       $prodimg= array() ;
	       $prodimgss= array() ;
	       $products=DB::table('products')->where('is_deleted',0)->where('prod_id',$product_id)->get();
	       foreach($products as $product)
	       {
	           $prod = $product;
	       }
	       $products_images=DB::table('galleries')->where('is_deleted',0)->where('prod_id',$product_id)->get();
	       $product_galleries=DB::table('product_galleries')->where('is_deleted',0)->where('prod_id',$product_id)->get();
	    
	       foreach($products_images as $products_ima)
	       {
	           $prodimg[] = $products_ima;
	       }
	       foreach($product_galleries as $product_gallerie)
	       {
	           $prodimgss[] = $product_gallerie;
	       }

	       $data['product_details'] = $prod;
	       if(isset($prodimg)){
	       $data['prodimgs'] = $prodimg;
	       }else{
	           $data['prodimgs'] = '';
	       }
	       if(isset($prodimgss)){
	       $data['prod_gal_imgss'] = $prodimgss;
	       }else{
	           $data['prod_gal_imgss'] = '';
	       }
	       $data['product_id'] = $product_id;
	      
	       return view('product-detail',$data);  
	    }
    
         public function dashboard()
	    { 
	         $data['orders']=DB::table('orders')->get()->count();
	         $data['users']=DB::table('users')->where('is_deleted',0)->get()->count();
	         $data['products']=DB::table('products')->where('is_deleted',0)->get()->count();
	         $data['categories']=DB::table('categories')->where('is_deleted',0)->get()->count();
	         $data['reviews']=DB::table('reviews')->get()->count();
	         $data['sub_total']=DB::table("orders")->get()->sum("sub_total");
                            
        //             echo "<pre>";
        //   print_r($data['orders']);die;              
	         return view('/dashboard',$data);
	    }
	    
         public function adminProfile()
	    {
	       // echo session()->get('admin_id');die;
	        $admin=Admin::where('id','=',session()->get('admin_id'))->first();
	         return view('/view_profile',compact('admin'));
	    }
	      public function ediAdminProfile($id)
	    {
	       // echo session()->get('admin_id');die;
	        $admin=Admin::where('id','=',$id)->first();
	         return view('/edit_admin_profile',compact('admin'));
	    }
	     public function changePassword ()
	    {
	       // echo session()->get('admin_id');die;
	        $admin=Admin::where('id','=',session()->get('admin_id'))->first();
	         return view('/change_password',compact('admin'));
	    }
	      public function updatePassword(Request $request , $id)
	    {
	          $request->validate([
                    'old_password' => 'required',
                    'new_password' => 'required',
                    're_entered_password' => 'required|same:new_password'
                  
                    ]);
	       // echo session()->get('admin_id');die;
	        $admin=Admin::where('id','=',$id)->first();
	        if($admin->password==md5($request->old_password)){
	              $admin->password=md5($request->new_password);
	               if ($admin->save()) {
                     
                        return \redirect('/admin_profile')->with('success', 'Admin password changed successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to change admin password.');
                    }
	        }else{
	             return \back()->with('fail', 'Please enter correct old password.');
	        }
	    
	    }
	     public function updateAdminProfile(Request $request , $id)
	    {
	          $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'mobile' => 'required|max:10|min:10',
                  
                    ]);
	        //echo($request->file('image'));die;
	       $hidden_image=$request->hidden_image;
	       $admin_image='';
	       if($request->hasFile('image')){
            
                    $file = $request->file('image');
                   $ext= $file->getClientOriginalExtension();
                    $admin_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/assets/img/', $admin_image)){
                       $admin_image="";
                 
                }
            }
            if($admin_image==''){
                        $admin_image=$hidden_image;
                    }else{
                        $admin_image=$admin_image;
                    }
	        $admin=Admin::where('id','=',$id)->first();
	        $admin->name=$request->name;
	        $admin->email=$request->email;
	        $admin->mobile=$request->mobile;
	        $admin->image=$admin_image;
	         if ($admin->save()) {
                     
                        return \redirect('/admin_profile')->with('success', 'Admin details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update admin details.');
                    }
	       
	    }
	    
	    public function loginAdmin(AdminLoginRequest $request)
	    {
	       
	            $admin = Admin::where('email', '=', $request->email)->first();
	          // dd($admin);
	          if($admin){
	              if($admin->password == md5($request->password)){
	                   $request->session()->put('admin_id', $admin->id);
	                   $request->session()->put('name', $admin->name);
	                   $request->session()->put('email', $admin->email);
	                   $request->session()->put('image', $admin->image);
                        return \redirect('/dashboard');
	                }else{
	                  return \back()->with('fail','You have entered wrong password.');
	                  }
	          }else{
	                  return \back()->with('fail','Email does not exist.');
	                  }
	          
    	}
    	
    	
         public function logoutAdmin(Request $request)
	    {
	        $request->session()->forget('admin_id');
	        $request->session()->forget('name');
	        $request->session()->forget('email');
	         return \redirect('/')->with('success', 'You have logged out successfully!');;
	       
	    }
         public function contactusform(Request $request)
	    {
	           // echo '<pre>';
            //  print_r($request->all());
            //  echo '<pre>';
            //  die;
               $itm_arr=array(
                        'name'   =>$request->name,
                        'email'       => $request->email,
                        'phone'   => $request->phone,
                        'profession'   => $request->profession,
                        'message'   => $request->message,
                            );
             $wish=DB::table('contact_us')->insert($itm_arr);
	         return \redirect('/contact-us')->with('success', 'Entry added  !');;
	       
	    }
	     public function capture_image_script(Request $request){
            $image = $_POST['image'];
            // print_r($image);die;
             
            // $location = asset('admin/public/capture_desk_image');
            $location = $_SERVER["DOCUMENT_ROOT"].'/admin/public/capture_desk_image';
            //echo $location;die;
            $image_parts = explode(";base64,", $image);
           
            $image_base64 = base64_decode($image_parts[1]);
            //echo($location);die;
             $filename = "screenshot_".uniqid().'.png';
            $file = $location .'/'. $filename;
            file_put_contents($file, $image_base64);
            echo $filename ;die();
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
  
	    
	    
	  
	

}

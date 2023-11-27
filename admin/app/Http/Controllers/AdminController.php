<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        public function index(Request $request){
            if($request->session()->has('admin_id')){
               
                 return \redirect('/dashboard');
            }else{
                  return view('login');
            }
        }
    
    
         public function dashboard()
	    { 
	         $data['orders']=DB::table('orders')->get()->count();
	         $data['users']=DB::table('users')->where('is_deleted',0)->get()->count();
	         $data['products']=DB::table('products')->where('is_deleted',0)->get()->count();
	         $data['categories']=DB::table('categories')->where('is_deleted',0)->get()->count();
	         $data['reviews']=DB::table('reviews')->get()->count();
	         $data['sub_total']=DB::table("orders")->get()->sum("sub_total");
	         $data['unique_leads'] =  DB::table('leads')
	                                    ->select('contact_no')
                                        ->distinct('contact_no')
                                        ->count();
	         
 	         //contact_no
	       //  $orders=	DB::table('leads as o')
        //                     ->select('o.*')
        //                     ->paginate(10);
                            
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
	         return \redirect('/')->with('success', 'Thank you for connecting with us. We will get back to you soon.');;
	       
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
	    
	    
	  
	

}

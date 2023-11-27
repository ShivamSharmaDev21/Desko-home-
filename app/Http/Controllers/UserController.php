<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
        public function viewLogin(){
          return view('login');
         }
          public function updateUserProfile(Request $request){
               $user_id=session('user_id');
             $address_id =  ($request->address_id)?$request->address_id:'';
             if(!empty($address_id)){
                 $itm_uparr=['fname'   => $request->fname, 'lname'   => $request->lname,'email'   => $request->email,'mobile'   => $request->mobile,'address'   => $request->address, 'city'   => $request->city,'state'   => $request->state, 'country'   => $request->country,'pincode'   => $request->pincode, 'updated_at'   => date('Y-m_d')];
                
            $address= DB::table('address')->where('address_id',$address_id)->update($itm_uparr);
             }else{
                  $itm_inarr=[ 'user_id'   => $user_id,'fname'   => $request->fname, 'lname'   => $request->lname, 'email'   => $request->email, 'mobile'   => $request->mobile,'address'   => $request->address,'city'   => $request->city, 'state'   => $request->state,'country'   => $request->country,'pincode'   => $request->pincode, 'default_status'   => 1,'status'   => 1, 'created_at'   =>date('Y-m_d'),'updated_at'   => date('Y-m_d')];
                  
            $address_id= DB::table('address')->where('address_id',$address_id)->insertGetId($itm_inarr);
             }
             $hidden_image=$request->hidden_image;
                     $image='';
                    if($request->hasFile('image')){
            
                    $file = $request->file('image');
                   $ext= $file->getClientOriginalExtension();
                    $image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('admin/public/user_image/', $image)){
                       $image='';
                 
                        }
                    }
                    if($image==''){
                        $image=$hidden_image;
                    }else{
                        $image=$image;
                    }
             
              $itm_up_userarr=['fname'=> $request->fname, 'lname'   => $request->lname,'email'   => $request->email,'mobile'   => $request->mobile,'image' => $image, 'updated_at'   => date('Y-m_d')];
                
            $user_updated= DB::table('users')->where('user_id',$user_id)->update($itm_up_userarr);
            if(!empty($user_updated)){
                 return \back()->with('success', 'Profile updated successfully !.');
            }else{
                 return \back()->with('fail', 'Failed to update profile.');
            }
          }
        public function myProfile(){
            $user_id=session('user_id');
             $data['address'] = DB::table('address as a')->join ('users as u','a.user_id','=','u.user_id')->where('a.user_id',$user_id)->where('a.default_status',1)->where('a.status',1)->select('a.*','u.image')->first();
            $data['state'] = DB::table('state_tbl')->get();
            if(isset($data['address']->state)){
            $data['city'] = DB::table('city_tbl')->where('state_id', $data['address']->state)->get();
            }
            // echo "<pre>"; print_r($data['address']);die;
          return view('my-profile',$data);
         }
          public function viewSignup(){
          return view('register');
         }
        public function storeUser(Request $request){
           $user_exist = User::where('email', '=', $request->email)->first();
            if($user_exist){
                 return \redirect('/register')->with('fail', 'Email already exist.');
            }else{
                $user = new User();
                $user->fname = $request->fname;
                $user->lname     = $request->lname;
                $user->email     = $request->email;
                $user->password  = md5($request->password);
                $user->mobile    = $request->mobile;
            
                    if ($user->save()) {
                        return \redirect('/login')->with('success', 'Signup successfully! Please login.');
                    } else {
                        return \back()->with('fail', 'Failed to Signup.');
                    }
            }
              
         }
          public function loginUser(Request $request)
	    {
	       // echo $request->password;die;
	            $user = User::where('email', $request->email)->first();
	           // $user = DB::table('users')->where('name', 'John')->first();
	       // return $request->all();die;
	       // echo "<pre>"; print_r($user);die;
	          if($user){
	              if($user->password == md5($request->password)){
	                   $request->session()->put('user_id', $user->user_id);
	                   $request->session()->put('fname', $user->fname);
	                   $request->session()->put('lname', $user->lname);
	                   $request->session()->put('email',$user->email);
	                   $request->session()->put('mobile',$user->mobile);
	                   $request->session()->put('image',$user->image);
	                   //if(session('temp_user_id')){
	                   //  $status_updated= DB::table('cart')->where('user_id',session('temp_user_id'))->update(['user_id' => session('user_id')]);  
	                   //  $status_updated= DB::table('desk_cart')->where('user_id',session('temp_user_id'))->update(['user_id' => session('user_id')]);  
	                   //   $request->session()->forget('temp_user_id');
	                   //   return \redirect('/view-cart');
	                   //}
	                   $prod_exist = DB::table('cart')->where('iteam_type','Product')->where('user_id',session('guest_user'))->get();
	                   $desk_exist = DB::table('desk_cart')->where('user_id',session('guest_user'))->get();
	                   if(!$prod_exist->isEmpty() || !$desk_exist->isEmpty()){
	                     $cart_updated= DB::table('cart')->where('user_id',session('guest_user'))->update(['user_id' => session('user_id')]);  
	                     $desk_cart_updated= DB::table('desk_cart')->where('user_id',session('guest_user'))->update(['user_id' => session('user_id')]);  
	                    // setcookie("guest_user", "", time() - 3600);
	                      return \redirect('/view-cart');
	                   }else{
	                        return \redirect('/');
	                   }
	                       
	                   
                       
	                }else{
	                  return \back()->with('fail','You have entered wrong password.');
	                  }
	          }else{
	                  return \back()->with('fail','Email does not exist.');
	                  }
	          
    	}
    	 public function logoutUser(Request $request)
	    {
	        $request->session()->forget('user_id');
	        $request->session()->forget('fname');
	        $request->session()->forget('lname');
	        $request->session()->forget('mobile');
	        $request->session()->forget('email');
	         $request->session()->forget('temp_user_id');
	         return \redirect('/login')->with('success', 'You have logged out successfully!');;
	       
	    }
           
}

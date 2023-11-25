<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
        public function index(){
             $users =	DB::table('users')
                            ->where('is_deleted','=',0)
                            ->orderBy('user_id','desc')
                            
                            ->select('*')
                            ->paginate(10);
                          //  echo "<pre>";print_r($users);die;
                 // $data['users']=User::where('is_deleted','=',0)->orderBy('user_id','desc')->paginate(10);
            
         $state='all';
            return view('view_users',compact('users'));
        }
         public function viewActiveUsers(){
           $users =	DB::table('users')->where('status','=',1)->where('is_deleted','=',0)->orderBy('user_id','desc')->paginate(10); 
             $state='active';
            return view('view_users',compact('users'));
         }
          public function viewInActiveUsers(){
            $users =	DB::table('users')->where('status','=',0)->where('is_deleted','=',0)->orderBy('user_id','desc')->paginate(10);
             $state='inactive';
            return view('view_users',compact('users'));
         }
        
         public function changeUserStatus(Request $request){
              $user=User::where('user_id','=',$request->user_id)->first();
              $user->status=$request->str;
              if ($user->save()) {
                       echo json_encode(['status'=>true]) ;
                    }
         }
        
        // public function addUser(){
        //     return view('add_user');
        // }
        
        //  public function storeUser(AddUserRequest $request){
            
        //       $user = new User();
        //         $user->fname = $request->fname;
        //         $user->lname     = $request->lname;
        //         $user->email     = $request->email;
        //         $user->password  = md5($request->password);
        //         $user->mobile    = $request->mobile;
            
        //             if ($user->save()) {
        //                 return \redirect('/view_users')->with('success', 'User added successfully!');
        //             } else {
        //                 return \back()->with('fail', 'Failed to add user.');
        //             }
        //  }
         
         public function editUser($user_id){
              $data['user']=User::where('user_id','=',$user_id)->first();
        // echo "<pre>";
        //   print_r($user);die;
          return view('edit_user',$data);
              
         }
         
          public function updateUser(EditUserRequest $request , $user_id){
            // echo $user_id;
            // return $request->all();die;
            
              $user =User::where('user_id','=',$user_id)->first();
                $user->fname     = $request->fname;
                $user->lname     = $request->lname;
                $user->email     = $request->email;
               
                $user->mobile    = $request->mobile;
            
                    if ($user->save()) {
                        return \redirect('/view_users/')->with('success', 'User details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update user details.');
                    }
         }
         
            
         public function deleteUser($user_id){
              $user=User::where('user_id','=',$user_id)->first();
               $user->is_deleted=1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($user->save()) {
                        return \redirect('/view_users')->with('success', 'User details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete user details.');
                    }
              
         }
           
}

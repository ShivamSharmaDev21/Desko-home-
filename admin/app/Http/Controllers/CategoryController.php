<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Support\Facades\DB;



class CategoryController extends Controller
{
        public function index(){
            $categories=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->paginate(10);
            return view('view_categories',compact('categories'));
        }
        
        public function addCategory(){
            return view('add_category');
        }
        
        public function changeCategoryStatus(Request $request){
          $category=Category::where('cat_id','=',$request->cat_id)->first();
          $category->status=$request->str;
            if ($category->save()) {
                echo json_encode(['status'=>true]) ;
            }
        }
        
        public function storeCategory(Request $request){
                $request->validate([
                    'category_name' => 'required|regex:/^[a-zA-Z]+$/u'
                    ]);
                $category = new Category();
                $category->cat_name =$request->category_name;
                $category->created_at = date('Y-m-d');
                $category->updated_at =  date('Y-m-d');
              
                if ($category->save()) {
                    return \redirect('/view_categories')->with('success', 'Category added successfully!');
                } else {
                    return \back()->with('fail', 'Failed to add category.');
                }
        }
         
        public function editCategory($id){
            $category=Category::where('cat_id','=',$id)->first();
                return view('edit_category',compact('category'));
              
        }
         
        public function updateCategory(Request $request , $id){
                $request->validate([
                       'category_name' => 'required|regex:/^[a-zA-Z]+$/u'
                        ]);
                $category =Category::where('cat_id','=',$id)->first();
                $category->cat_name =$request->category_name;
                $category->updated_at =  date('Y-m-d');
                if ($category->save()) {
                    return \redirect('/view_categories')->with('success', 'Category details updated successfully!');
                } else {
                    return \back()->with('fail', 'Failed to update category details.');
                }
        }
         
            
        public function deleteCategory($id){
            $category=Category::where('cat_id','=',$id)->first();
            $category->is_deleted =1;
       
            if ($category->save()) {
                return \redirect('/view_categories')->with('success', 'Category details deleted successfully!');
            } else {
                return \back()->with('fail', 'Failed to delete category details.');
            }
        }
        
        
        // Coupons
        public function couponsList(){
            $coupon = Coupon::where('is_deleted','=',0)->orderBy('status','desc')->get();
                return view('view_coupon',compact('coupon'));
        }
        
        public function addCoupons() {
            
            // return view('add_category');
            return view('add_coupon');
        }
        
        public function storeCoupon( Request $request ){
            $request->validate([
                    'coupon_code' => 'required',
                    'code_name' => 'required',
                    't_and_q' => 'required'
                    ]);
            $data = $request->all();
            $coupon = new Coupon();
            $coupon->code = $data['coupon_code'];
            $coupon->code_name = $data['code_name'];
            $coupon->t_and_q = $data['t_and_q'];
            $coupon->product_price = $data['product_price'];
            $coupon->status = 1;
            
            
            if ($coupon->save()) {
                return \redirect('/coupons_list')->with('success', 'New Coupon added successfully!');
            } else {
                return \back()->with('fail', 'Failed to add material.');
            }

            
        }
        
        public function  changeCouponStatus( Request $request ){
            $coupon= Coupon::where('id','=',$request->cat_id)->first();
            $coupon->status=$request->str;
            if ( $coupon->save() ) {
                       echo json_encode(['status'=>true]) ;
            }
        }
        
        
        
        public function deleteCoupon($id){
            $coupon = Coupon::where('id','=',$id)->first();
            $coupon->is_deleted = 1;
       
            if ($coupon->save()) {
                return \redirect('/coupons_list')->with('success', 'Coupon details deleted successfully!');
            } else {
                return \back()->with('fail', 'Failed to delete Coupon details.');
            }
        }
        
                // $coupan_image="";
                //  if( !empty($request->coupan_image) ){
                //     $file = $request->coupan_image;
                //     $ext= $file->getClientOriginalExtension();
                //     $coupan_image = rand(1000,9999).time().".".$ext;
                //     if(!$file->move('public/feature_image/', $coupan_image)){
                //         $coupan_image="";
                //     }
                // }
                // $coupan_image=$is_customized_image;
        
           
}

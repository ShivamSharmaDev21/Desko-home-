<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
        public function index(){
            $categories=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->get();
        //     echo "<pre>";
        //   print_r($banners);die;
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
        // echo "<pre>";
        //   print_r($user);die;
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
        // echo "<pre>";
        //   print_r($user);die;
        if ($category->save()) {
                        return \redirect('/view_categories')->with('success', 'Category details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete category details.');
                    }
              
         }
           
}

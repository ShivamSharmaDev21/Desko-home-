<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
        public function index(){
            // $data['products']=Product:: where('status','=',1)->orWhere('status','=',3)->where('is_deleted','=',0)->orderBy('status','desc')->get();
            $data['products'] = Product::where('status','=',1)->where('is_deleted','=',0)->orWhere('status','=',3)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();

            return view('view-products',$data);
        }
        
        public function searchProduct(Request $request){
            //  if(session('temp_user_id')){}else{ session()->put('temp_user_id', rand(10000,99999));}
            $prod_name=$request->prod_name;
             $data['products']=Product::where('prod_name', 'LIKE', "%$prod_name%")->where('status','<>',0)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();
             return view('view-products',$data);
         }

        public function liveSearchProduct(Request $request){
            $prod_name=$request->prod_name;
            $products=Product::where('prod_name', 'LIKE', "%$prod_name%")->where('status','<>',0)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();
             echo json_encode($products);
         }
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
         public function inactiveProducts(){
           
            $products=Product::where('status','=',0)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();
        //     echo "<pre>";
        //   print_r($banners);die;
            return view('view_products',compact('products'));
        }
         public function changeProductStatus(Request $request){
              $product=Product::where('prod_id','=',$request->prod_id)->first();
              $product->status=$request->str;
              if ($product->save()) {
                       echo json_encode(['status'=>true]) ;
                    }
         }
        
        public function addProduct(){
             $data['categories']=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->get();
            return view('add_product',$data);
        }
        
         public function storeProduct(Request $request){
                 $request->validate([
                    'prod_name' => 'required',
                    'category' => 'required',
                    'minimum_price' => 'required|numeric',
                    'maximum_price' => 'required|numeric',
                    'feature_image' => 'required',
                     'description' => 'required'
                  
                    ]);
                                    
            if($request->hasFile('feature_image')){
            
                    $file = $request->file('feature_image');
                   $ext= $file->getClientOriginalExtension();
                    $feature_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/feature_image/', $feature_image)){
                       $feature_image="";
                 
                }
            }
           
                $product = new Product();
                $product->cat_id        =$request->category;
                $product->prod_name     =$request->prod_name;
                $product->feature_image = ($feature_image)?$feature_image:'';
                $product->offer_price   = $request->minimum_price;
                $product->mrp_price     = $request->maximum_price;
               // $product->gallery_image = (!empty($gallery_images))?$gallery_images:'';
                $product->description   = $request->description;
                $product->status        = 1;
                $product->created_at    = date('Y-m-d');
                $product->updated_at    = date('Y-m-d');
                    if ($product->save()) {
                        $prod_id=$product->prod_id;
                            if($files=$request->file('gallery_image')){
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/gallery_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'prod_id'           => $prod_id,
                                    'gallery_image'     => $gallery_image,
                                    'created_at'        => date('Y-m-d'),
                                    'updated_at'        => date('Y-m-d')
                                    );
                                DB::table('galleries')->insert($itm_arr);
                                   
                                }
                       
                            }
                       
                        return \redirect('/view_products')->with('success', 'Product added successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to add Product.');
                    }
         }
          public function updateProduct(Request $request){
            $request->validate([
                    'prod_name' => 'required',
                    'category' => 'required',
                    'minimum_price' => 'required|numeric',
                    'maximum_price' => 'required|numeric',
                     'description' => 'required'
                  
                    ]);
                    $hidden_feature_image=$request->hidden_feature_image;
                     $feature_image="";
                    if($request->hasFile('feature_image')){
            
                    $file = $request->file('feature_image');
                   $ext= $file->getClientOriginalExtension();
                    $feature_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/feature_image/', $feature_image)){
                       $feature_image="";
                 
                        }
                    }
                    if($feature_image==''){
                        $feature_image=$hidden_feature_image;
                    }else{
                        $feature_image=$feature_image;
                    }
                $product =Product::where('prod_id','=',$request->prod_id)->first();
                $product->cat_id        =$request->category;
                $product->prod_name     =$request->prod_name;
                $product->feature_image = ($feature_image)?$feature_image:'';
                $product->offer_price   = $request->minimum_price;
                $product->mrp_price     = $request->maximum_price;
                $product->description   = $request->description;
                $product->updated_at    = date('Y-m-d');
            
                    if ($product->save()) {
                             if($files=$request->file('gallery_image')){
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/gallery_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'prod_id'           => $request->prod_id,
                                    'gallery_image'     => $gallery_image,
                                    'created_at'        => date('Y-m-d'),
                                    'updated_at'        => date('Y-m-d')
                                    );
                                DB::table('galleries')->insert($itm_arr);
                                   
                                }
                       
                            }
                        return \redirect('/view_products')->with('success', 'Product details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update Product details.');
                    }
         }
         public function editProduct($id){
              $data['product']=Product::where('prod_id','=',$id)->first();
               $data['categories']=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->get();
                $data['galleries'] = DB::table('galleries')->select('*')->where('is_deleted','=',0)->where('prod_id',$id )->get();
        // echo "<pre>";
        //   print_r($user);die;
          return view('edit_product',$data);
              
         }
          public function changeGalleryImage($id){
                $data['galleries'] = DB::table('galleries')->select('*')->where('is_deleted','=',0)->where('prod_id',$id )->get();
                $data['prod_id']=$id;
        // echo "<pre>";
        //   print_r($user);die;
          return view('change_gallery_image',$data);
              
         }
          public function updateProductGallery(Request $request){
               DB::table('galleries')->where('prod_id', $request->prod_id)->update(['is_deleted' => 1]);
            //   DB::table('galleries')->where('prod_id', '=', $request->prod_id)->delete();
              $img_count=$request->img_count;
              for($i=0;$i<$img_count;$i++){
                  $h='hidden_gallery_image_'.$i;
                  $hidden_gallery_image=$request->$h;
                  $gallery_image='';
                    if($file=$request->file('gallery_image_'.$i)){
                       
                            $ext=$file->getClientOriginalExtension();
                             $gallery_image = time().rand(1000,9999).".".$ext;
                            if(!$file->move('public/gallery_image/', $gallery_image)){
                               $gallery_image='';
                        }
                       
                    }
                   // echo 'gi='.$gallery_image.'hi='.$hidden_gallery_image;die;
                    if($gallery_image==''){
                        $gallery_image=$hidden_gallery_image;
                    }else{
                        $gallery_image=$gallery_image;
                    }
                     $itm_arr=array(
                            'prod_id'           =>$request->prod_id,
                            'gallery_image'     => $gallery_image,
                            'created_at'        => date('Y-m-d'),
                            'updated_at'        => date('Y-m-d')
                            );
                    $ins= DB::table('galleries')->insert($itm_arr);
              }
              
            if($ins>0){  
            return  \redirect("/change_gallery_image/$request->prod_id")->with('success', 'Product gallery updated successfully!');
            }else{
               return \back()->with('fail', 'Failed to update Product gallery.');   
            }
              
         }
         
         
          public function deleteGalleryImage($id,$prod_id){
             $gal=  DB::table('galleries')->where('id', $id)->update(['is_deleted' => 1]);
            
          
            if ($gal) {
           
                        return  \redirect("/change_gallery_image/$prod_id")->with('success', 'Product gallery image deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete Product details.');
                    }
              
         }
         
            
         public function deleteProduct($id){
           
              $product=Product::where('prod_id','=',$id)->first();
                $product->is_deleted=1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($product->save()) {
            //  DB::table('galleries')->where('prod_id', '=', $id)->delete();
             $gal=  DB::table('galleries')->where('prod_id', $id)->update(['is_deleted' => 1]);
            
                        return \redirect('/view_products')->with('success', 'Product details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete Product details.');
                    }
              
         }
           
}

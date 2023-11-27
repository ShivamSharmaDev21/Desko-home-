<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;




class ProductController extends Controller
{
        public function index()
        {
            $products=Product::where('is_deleted','=',0)->orderBy('prod_id','desc')->paginate(10);
            return view('view_products',compact('products'));
        }
        
        public function inactiveProducts()
        {
            $products=Product::where('status','=',0)->where('is_deleted','=',0)->orderBy('prod_id','desc')->paginate(10);
            return view('view_products',compact('products'));
        }
        
        public function changeProductStatus(Request $request){
              $product=Product::where('prod_id','=',$request->prod_id)->first();
              $product->status=$request->str;
              if ($product->save()) {
                       echo json_encode(['status'=>true]) ;
                    }
        }
        
        public function changeProductCustomized(Request $request){
              $product=Product::where('prod_id','=',$request->prod_id)->first();
              $product->is_customized=$request->str;
              if ($product->save()) {
                      echo json_encode(['status'=>true]) ;
                    }
        }
        
        
         public function changeStatusImage(Request $request){
              $product=Product::where('prod_id','=',$request->prod_id)->first();
              $product->is_viedo=$request->str;
              if ($product->save()) {
                      echo json_encode(['status'=>true]) ;
                    }
        }
        
        
        public function addProduct(){
             $data['categories']=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->get();
            return view('add_product',$data);
        }
        
         public function deleteProductImg(Request $request){
            $data = $request->all() ;
            $id = $data['id'];
            $gal = DB::table('product_galleries')->where('id', $id)->update(['is_deleted' => 1]);
            
            if ($gal) {
                echo json_encode(['status'=>true]) ;
            }

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
                             if($files=$request->file('gallery_image_item')){
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
                                DB::table('product_galleries')->insert($itm_arr);
                                   
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
                    $is_customized_image_hidden = $request->is_customized_image_hidden;
                    $feature_image="";
                    $is_customized_image = "";
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
                    } else {
                        $feature_image=$feature_image;
                    }
                    
                    
                    // Custum Button image
                    if( !empty($request->is_customized_image) ){
                        $file = $request->is_customized_image;
                        $ext= $file->getClientOriginalExtension();
                        $is_customized_image = rand(1000,9999).time().".".$ext;
                        if(!$file->move('public/feature_image/', $is_customized_image)){
                            $is_customized_image="";
                        }
                    }
                    if($is_customized_image==''){
                        $is_customized_image=$is_customized_image_hidden;
                    } else {
                        $is_customized_image=$is_customized_image;
                    }
                    

                $product =Product::where('prod_id','=',$request->prod_id)->first();
                $product->cat_id        =$request->category;
                $product->prod_name     =$request->prod_name;
                $product->feature_image = ($feature_image)?$feature_image:'';
                $product->offer_price   = $request->minimum_price;
                $product->mrp_price     = $request->maximum_price;
                $product->description   = $request->description;
                $product->updated_at    = date('Y-m-d');
                $product->is_customized_image =  ($is_customized_image) ? $is_customized_image : '';
                $product->url =  !empty($request->url) ? $request->url : '' ;
                
            
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
                              if($files=$request->file('gallery_image_item')){
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
                                DB::table('product_galleries')->insert($itm_arr);
                                   
                                }
                       
                            }
                        return \redirect('/view_products')->with('success', 'Product details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update Product details.');
                    }
        }
        
        
        public function editProduct($id)
        {
            $data['product']=Product::where('prod_id','=',$id)->first();
            $data['categories']=Category::where('is_deleted','=',0)->orderBy('cat_id','desc')->get();
            $data['galleries'] = DB::table('galleries')->select('*')->where('is_deleted','=',0)->where('prod_id',$id )->get();
            $data['galleries_image'] = DB::table('galleries')->select('*')->where('is_deleted','=',0)->where('prod_id',$id )->get();
            $data['product_galleries'] =DB::table('product_galleries')->where('is_deleted',0)->where('prod_id',$id)->get();
            return view('edit_product',$data);
              
        }
        
        public function changeGalleryImage($id)
        {
            $data['galleries'] = DB::table('galleries')->select('*')->where('is_deleted','=',0)->where('prod_id',$id )->get();
            $data['prod_id']=$id;
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
            if ($product->save()) {
                $gal=  DB::table('galleries')->where('prod_id', $id)->update(['is_deleted' => 1]);
                    return \redirect('/view_products')->with('success', 'Product details deleted successfully!');
            } else {
                return \back()->with('fail', 'Failed to delete Product details.');
            }
              
        }
        
        public function editCoupons ($id){
            Coupon::where('id','=',$id)->first();
            $coupon = Coupon::where('id','=',$id)->first();
    
            return  view('edit_coupon',compact('coupon'));
        }
        
        
        public function storeEditedCoupon ( Request $request , $id){
            
            $request->validate([
                    'coupon_code' => 'required',
                    'code_name' => 'required',
                    't_and_q' => 'required'
                    ]);
                    
          
            $coupon = Coupon::where('id','=',$id)->first();
            $data = $request->all();
            
            //  $file = $request->file('file');
            // $this->upload($request);
            // dd($data , $request , $request->file('file'));

            $coupon->code = $data['coupon_code'];
            $coupon->code_name = $data['code_name'];
            $coupon->t_and_q = $data['t_and_q'];
            $coupon->product_price = $data['product_price'];
            $coupon->status = 1;
            
            if( $coupon->save() ){
                return \redirect('/coupons_list')->with('success', 'Coupon saved successfully!');
            }else{
                return \redirect('/coupons_list')->with('success', 'Coupon not Saved !');
            }
        }
        
        
        public function upload(Request $request)
        {
             // Validate the uploaded file
            // $request->validate([
            //     'file' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Example validation rules
            // ]);
    
            // Get the file from the request
            $file = $request->file('file');
            // dd($file);
    
            // Generate a unique name for the file
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Move the uploaded file to the storage location
            $file->storeAs('uploads', $fileName, 'public');
    
            // Optionally, save the file information to the database
            // File::create(['file_name' => $fileName, 'path' => 'uploads/' . $fileName]);
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'File uploaded successfully!');
        }
        
           
}

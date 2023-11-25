<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\SmartFeature;
use Illuminate\Support\Facades\DB;


class SmartFeatureController extends Controller
{
    public function index(){
        $smart_features=SmartFeature::where('is_deleted','=',0)->orderBy('id','desc')->get();
       // echo "<pre>";print_r($banners);die;
        return view('view_smart_features',compact('smart_features'));
    }
    
    public function addSmartFeature(){
        // return view('add_smart_feature');
         return view('add_smart_features');
    }
     public function changeSmartFeatureStatus(Request $request){
              $smart=SmartFeature::where('id','=',$request->smart_id)->first();
              $smart->status=$request->str;
              if ($smart->save()) {
                       echo json_encode(['status'=>true]) ;
                    }
         }
         
         // to Change the sequence of the smart feture 
         public function changeSmartFeatureSequence (Request $request){
            
              $smart=SmartFeature::where('id','=',$request->smart_id)->first();
               $smart->sl_number=$request->str;
                if ($smart->save()) {
                    echo json_encode(['status'=>true]) ;
                }
         }
    
    public function storeSmartFeature(Request $request){
             $request->validate([
                'feature_name'  => 'required',
                'image'         => 'mimes:jpeg,jpg,png,gif|required',
                'price'          => 'required|numeric'
                ]);
                    if($request->hasFile('image')){
                            $file = $request->file('image');
                           $ext= $file->getClientOriginalExtension();
                            $mainFilename = rand(1000,9999).time().".".$ext;
                               if(!$file->move('public/smart_feature_image/', $mainFilename)){
                               $mainFilename="";
                            }
                    }
             $smart_feature = new SmartFeature();
            $smart_feature->feature_name    =$request->feature_name;
            $smart_feature->image           =$mainFilename;
            $smart_feature->price           =$request->price;
            $smart_feature->description     =($request->description)?$request->description:'';
            $smart_feature->created_at      =date('Y-m-d');
            $smart_feature->updated_at      =date('Y-m-d');
            $smart_feature->short_note      = !empty($request->short_note) ? $request->short_note : '';
           
                if ($smart_feature->save()) {
                     $smart_feature_id=$smart_feature->id;
                            if($files=$request->file('gallery_image')){
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/smart_feature_gallery_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'smart_feature_id'           => $smart_feature_id,
                                    'smart_gallery_image'     => $gallery_image,
                                    'created_at'        => date('Y-m-d'),
                                    'updated_at'        => date('Y-m-d')
                                    );
                                DB::table('smart_feature_galleries')->insert($itm_arr);
                                   
                                }
                       
                            }
                    return \redirect('/view_smart_feature')->with('success', 'Smart Feature  added successfully!');
                } else {
                    return \back()->with('fail', 'Failed to add smart feature .');
                }
    }
    public function updateSmartFeature(Request $request){
            $request->validate([
                    'feature_name' => 'required',
                    'price' => 'required|numeric',
                  
                  
                    ]);
                    $hidden_feature_image=$request->hidden_feature_image;
                     $feature_image="";
                    if($request->hasFile('feature_image')){
            
                    $file = $request->file('feature_image');
                   $ext= $file->getClientOriginalExtension();
                    $feature_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/smart_feature_image/', $feature_image)){
                       $feature_image="";
                 
                        }
                    }
                    if($feature_image==''){
                        $feature_image=$hidden_feature_image;
                    }else{
                        $feature_image=$feature_image;
                    }
                $sm_feature =SmartFeature::where('id','=',$request->smart_feature_id)->first();
                $sm_feature->feature_name     = $request->feature_name;
                $sm_feature->image            = ($feature_image)?$feature_image:'';
                $sm_feature->price            = $request->price;
                $sm_feature->description      = ($request->description)?$request->description:'';
                $sm_feature->updated_at       = date('Y-m-d');
                $sm_feature->short_note       = !empty($request->short_note) ? $request->short_note : '';
                $sm_feature->sl_number        = !empty($request->sl_number) ? $request->sl_number : '';

            
                    if ($sm_feature->save()) {
                             if($files=$request->file('gallery_image')){
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/smart_feature_gallery_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'smart_feature_id'      => $request->smart_feature_id,
                                    'smart_gallery_image'   => $gallery_image,
                                    'created_at'            => date('Y-m-d'),
                                    'updated_at'            => date('Y-m-d')
                                    );
                                DB::table('smart_feature_galleries')->insert($itm_arr);
                                   
                                }
                       
                            }
                        return \redirect('/view_smart_feature')->with('success', 'Smart feature details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update Smart feature details.');
                    }
         }
      public function deleteSmartGalleryImage($id,$smart_feature_id){
          $gal=  DB::table('smart_feature_galleries')->where('id', $id)->update(['is_deleted' => 1]);
          
       
            if ($gal) {
           
                        return  \redirect("/change_smart_feature_gallery_image/$smart_feature_id")->with('success', 'Smart Feature gallery image deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete Smart Feature details.');
                    }
              
         }
           public function updateSmartGallery(Request $request){
                DB::table('smart_feature_galleries')->where('smart_feature_id', $request->smart_feature_id)->update(['is_deleted' => 1]);
             // DB::table('smart_feature_galleries')->where('smart_feature_id', '=', $request->smart_feature_id)->delete();
              $img_count=$request->img_count;
              for($i=0;$i<$img_count;$i++){
                  $h='hidden_gallery_image_'.$i;
                  $hidden_gallery_image=$request->$h;
                  $gallery_image='';
                    if($file=$request->file('gallery_image_'.$i)){
                       
                            $ext=$file->getClientOriginalExtension();
                             $gallery_image = time().rand(1000,9999).".".$ext;
                            if(!$file->move('public/smart_feature_gallery_image/', $gallery_image)){
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
                            'smart_feature_id'           =>$request->smart_feature_id,
                            'smart_gallery_image'     => $gallery_image,
                            'created_at'        => date('Y-m-d'),
                            'updated_at'        => date('Y-m-d')
                            );
                    $ins= DB::table('smart_feature_galleries')->insert($itm_arr);
              }
              
            if($ins>0){  
            return  \redirect("/change_smart_feature_gallery_image/$request->smart_feature_id")->with('success', 'Smart feature gallery updated successfully!');
            }else{
               return \back()->with('fail', 'Failed to update Smart feature gallery.');   
            }
              
         }
     
     public function editSmartFeature($id){
          $data['smart_feature']=SmartFeature::where('id','=',$id)->first();
           $data['galleries'] = DB::table('smart_feature_galleries')->select('*')->where('is_deleted',0)->where('smart_feature_id',$id )->get();
    // echo "<pre>";
    //   print_r($smart_feature);die;
      return view('edit_smart_feature',$data);
          
     }
      public function changeSmartFeatureGalleryImage($id){
                $data['galleries'] = DB::table('smart_feature_galleries')->select('*')->where('is_deleted',0)->where('smart_feature_id',$id )->get();
                $data['smart_feature_id']=$id;
        // echo "<pre>";
        //   print_r($user);die;
          return view('change_smart_feature_gallery_image',$data);
              
         }
     
  
     
        
     public function deleteSmartFeature($id){
        
          $smart_feature=SmartFeature::where('id','=',$id)->first();
           $smart_feature->is_deleted=1;
    // echo "<pre>";
    //   print_r($user);die;
    if ($smart_feature->save()) {
         $gal=  DB::table('smart_feature_galleries')->where('smart_feature_id', $id)->update(['is_deleted' => 1]);
                    return \redirect('/view_smart_feature')->with('success', 'Smart feature  deleted successfully!');
                } else {
                    return \back()->with('fail', 'Failed to delete smart feature details.');
                }
          
     }
           
}

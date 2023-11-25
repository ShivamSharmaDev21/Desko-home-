<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desktop;
use App\Models\Colour;
use App\Models\Material;
use Illuminate\Support\Facades\DB;

class DesktopController extends Controller
{
        public function index(){
            $data['desktops']=	DB::table('desktops as d')
                            ->join('materials as m','m.id','=','d.top_material')
                            ->orderBy('d.top_id','desc')
                            ->where('d.is_deleted','=',0)
                            ->select('d.*','m.material_name')
                            ->get();
            $data['colours']=Colour::orderBy('id','desc')->get();
            //$desktops=Desktop::where('top_status','=',1)->orderBy('top_id','desc')->get();
        //     echo "<pre>";
        //   print_r($data['desktops']);die;
            return view('view_desk_tops',$data);
        }
        public function addDeskTop(){
             $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','asc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','asc')->get();
            return view('add_desk_top',$data);
        }
         public function storeDeskTop(Request $request){
             // echo "<pre>";
             /// print_r($request->all()); die(); 
              
        //   print_r($request->file('top_image'));die;
                 $request->validate([
                    'top_name' => 'required',
                    'top_price' => 'required|numeric',
                    'top_material' => 'required',
                    'top_colour' => 'required',
                    'top_description' => 'required',
                     'top_image' => 'required',
                     'size_type' => 'required'
                  
                    ]);
           
                $desktop = new Desktop();
                $desktop->top_name         =$request->top_name;
                $desktop->top_price        =$request->top_price;
                
                 $desktop->size_type       = $request->size_type;
                 
                $desktop->top_material     =$request->top_material;
                $desktop->top_description  =$request->top_description;
                $desktop->top_status       = 1;
                $desktop->created_at       =date('Y-m-d');
                $desktop->updated_at       =date('Y-m-d');
               
                if ($desktop->save()) {
                    $top_id=$desktop->top_id;
                             if($files=$request->file('top_image')){
                                 $i=0;
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/desk_top_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'top_id'        => $top_id,
                                    'colour_id'     => $request->top_colour[$i],
                                    'image'        =>$gallery_image
                                   
                                    );
                                DB::table('top_gallery')->insert($itm_arr);
                                   $i++;
                                }
                       
                            }
                         return \redirect('/view_desk_top')->with('success', 'Desk top added successfully!');
                    } else {
                      return \back()->with('fail', 'Failed to add desk top.');
                    }
                   
         }
          public function getTopPrice(Request $request){
            //   $product=Material::where('id','=',$request->m_id)->first();
              $material_price=Material::find($request->m_id, ['material_price']);
              //echo $material_price;die;
              echo json_encode(['status'=>true,'body'=>$material_price]) ;
                    
         }
          public function changeDeskTopStatus(Request $request){
            $status_updated= DB::table('desktops')->where('top_id', $request->top_id)->update(['top_status' => $request->str]);

              if ($status_updated) {
                       echo json_encode(['status'=>true]) ;
                    }
         }
        public function deleteDeskTop($id){
              $deskTop=DeskTop::where('top_id','=',$id)->first();
               $deskTop->is_deleted=1;
        if($deskTop->save()){
           
                        return \redirect('/view_desk_top')->with('success', 'Desk top details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete desk top details.');
                    }
              
         }
        public function updateDeskTop(Request $request){
        //              echo "<pre>";
         // print_r($request->top_id);die;
        //   print_r($request->file('top_image'));die;
           $request->validate([
                    'top_name' => 'required',
                    'top_price' => 'required|numeric',
                    'top_material' => 'required',
                    'top_description' => 'required'
                  
                    ]);
                $desktop = Desktop::where('top_id','=',$request->top_id)->first();
                $desktop->top_name         =$request->top_name;
                $desktop->top_price        =$request->top_price;
                $desktop->top_material     =$request->top_material;
                $desktop->top_description  =$request->top_description;
                $desktop->updated_at       =date('Y-m-d');
                    if ($desktop->save()) {
                         if($files=$request->file('top_image')){
                                 $i=0;
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/desk_top_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'top_id'           => $request->top_id,
                                    'colour_id'     => $request->top_colour[$i],
                                    'image'        =>$gallery_image
                                   
                                    );
                                DB::table('top_gallery')->insert($itm_arr);
                                   $i++;
                                }
                       
                            }
                        return \redirect('/view_desk_top')->with('success', 'Desk top details updated successfully!');
                    }else{
                        return \back()->with('fail', 'Failed to update desk top.');
                    }
         }
        public function editDeskTop($id){
              $data['desktop']=DeskTop::where('top_id','=',$id)->first();
                 $data['top_gall']= DB::table('top_gallery as t')->join('colours as c','c.id','=','t.colour_id')->where('t.top_id',  $data['desktop']->top_id)->select('t.*','c.colour_name')->get();
                       
        //   echo "<pre>";print_r($data['top_gall']);die;
              $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','desc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','desc')->get();
          return view('edit_desk_top',$data);
              
         }
          public function removeDeskTopgall($top_id,$gall_id){
               $deskTop=DB::table('top_gallery')->where('top_id','=',$top_id)->where('id','=',$gall_id)->delete();
             return \redirect("edit_desk_top/$top_id");
     
              
         }
           
}

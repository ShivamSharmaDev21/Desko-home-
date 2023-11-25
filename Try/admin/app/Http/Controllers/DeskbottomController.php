<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskbottom;
use App\Models\Colour;
use App\Models\Material;
use Illuminate\Support\Facades\DB;

class DeskbottomController extends Controller
{
        public function index(){
            $data['deskbottoms']=	DB::table('deskbottoms as d')
                                ->join('materials as m','m.id','=','d.bottom_material')
                                ->orderBy('d.bottom_id','desc')
                                 ->where('d.is_deleted','=',0)
                                ->select('d.*','m.material_name')
                                ->get();
            $data['colours']=Colour::orderBy('id','desc')->get();
            //$desktops=Desktop::where('top_status','=',1)->orderBy('top_id','desc')->get();
        //     echo "<pre>";
        //   print_r($data['desktops']);die;
            return view('view_desk_bottoms',$data);
        }
        public function addDeskBottom(){
             $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','asc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','asc')->get();
            return view('add_desk_bottom',$data);
        }
         public function storeDeskBottom(Request $request){
                 $request->validate([
                    'bottom_name' => 'required',
                    'bottom_price' => 'required|numeric',
                    'bottom_material' => 'required',
                    'bottom_colour' => 'required',
                    'bottom_description' => 'required',
                     'bottom_image' => 'required'
                  
                    ]);
                $deskbottom = new Deskbottom();
                $deskbottom->bottom_name         =$request->bottom_name;
                $deskbottom->bottom_price        =$request->bottom_price;
                $deskbottom->bottom_material     =$request->bottom_material;
                //$deskbottom->bottom_colour       =implode(',',$request->bottom_colour);
                $deskbottom->bottom_description  =$request->bottom_description;
               // $deskbottom->bottom_image        =($bottom_image)?$bottom_image:'';
                $deskbottom->bottom_status       = 1;
                $deskbottom->created_at       =date('Y-m-d');
                $deskbottom->updated_at       =date('Y-m-d');
                    if ($deskbottom->save()) {
                         $bottom_id=$deskbottom->bottom_id;
                          if($files=$request->file('bottom_image')){
                                 $i=0;
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/desk_bottom_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'bottom_id'           => $bottom_id,
                                    'colour_id'     => $request->bottom_colour[$i],
                                    'image'        =>$gallery_image
                                    );
                                DB::table('bottom_gallery')->insert($itm_arr);
                                   $i++;
                                }
                       
                            }
                        return \redirect('/view_desk_bottom')->with('success', 'Desk bottom added successfully!');
                    }else{
                        return \back()->with('fail', 'Failed to add desk bottom.');
                    }
         }
          public function getBottomPrice(Request $request){
            //   $product=Material::where('id','=',$request->m_id)->first();
              $material_price=Material::find($request->m_id, ['material_price']);
              //echo $material_price;die;
              echo json_encode(['status'=>true,'body'=>$material_price]) ;
                    
         }
          public function changeDeskBottomStatus(Request $request){
            $status_updated= DB::table('deskbottoms')->where('bottom_id', $request->bottom_id)->update(['bottom_status' => $request->str]);

              if ($status_updated) {
                       echo json_encode(['status'=>true]) ;
                    }
         }
        public function deleteDeskBottom($id){
              $deskBottom=DeskBottom::where('bottom_id','=',$id)->first();
                $deskBottom->is_deleted=1;
        if($deskBottom->save()){
           
                        return \redirect('/view_desk_bottom')->with('success', 'Desk bottom details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete desk bottom details.');
                    }
              
         }
        public function updateDeskBottom(Request $request){
           $request->validate([
                    'bottom_name' => 'required',
                    'bottom_price' => 'required|numeric',
                    'bottom_material' => 'required',
                    'bottom_description' => 'required'
                  
                    ]);
                $deskbottom = Deskbottom::where('bottom_id','=',$request->bottom_id)->first();;
                $deskbottom->bottom_name         =$request->bottom_name;
                $deskbottom->bottom_price        =$request->bottom_price;
                $deskbottom->bottom_material     =$request->bottom_material;
                $deskbottom->bottom_description  =$request->bottom_description;
                $deskbottom->updated_at          =date('Y-m-d');
                    if ($deskbottom->save()) {
                        if($files=$request->file('bottom_image')){
                                 $i=0;
                                foreach($files as $file){
                                    $ext=$file->getClientOriginalExtension();
                                     $gallery_image = time().rand(1000,9999).".".$ext;
                                    if(!$file->move('public/desk_bottom_image/', $gallery_image)){
                                       $gallery_image="";
                                }
                                $itm_arr=array(
                                    'bottom_id'           => $request->bottom_id,
                                    'colour_id'     => $request->bottom_colour[$i],
                                    'image'        =>$gallery_image
                                    );
                                DB::table('bottom_gallery')->insert($itm_arr);
                                   $i++;
                                }
                       
                            }
                        return \redirect('/view_desk_bottom')->with('success', 'Desk bottom details updated successfully!');
                    }else{
                        return \back()->with('fail', 'Failed to update desk bottom.');
                    }
         }
        public function editDeskBottom($id){
              $data['deskbottom']=Deskbottom::where('bottom_id','=',$id)->first();
               $data['bottom_gall']= DB::table('bottom_gallery as t')->join('colours as c','c.id','=','t.colour_id')->where('t.bottom_id',  $data['deskbottom']->bottom_id)->select('t.*','c.colour_name')->get();
              $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','desc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','desc')->get();
          return view('edit_desk_bottom',$data);
              
         }
         public function removeDeskBottomgall($bot_id,$gall_id){
               $deskBottom=DB::table('bottom_gallery')->where('bottom_id','=',$bot_id)->where('id','=',$gall_id)->delete();
             return \redirect("edit_desk_bottom/$bot_id");
     
              
         }
           
}

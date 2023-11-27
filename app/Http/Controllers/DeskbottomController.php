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
                                ->select('d.*','m.material_name')
                                ->get();
            $data['colours']=Colour::orderBy('id','desc')->get();
            //$desktops=Desktop::where('top_status','=',1)->orderBy('top_id','desc')->get();
        //     echo "<pre>";
        //   print_r($data['desktops']);die;
            return view('view_desk_bottoms',$data);
        }
        public function addDeskBottom(){
             $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','desc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','desc')->get();
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
                                    
            if($request->hasFile('bottom_image')){
            
                    $file = $request->file('bottom_image');
                   $ext= $file->getClientOriginalExtension();
                    $bottom_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/desk_bottom_image/', $bottom_image)){
                       $bottom_image="";
                 
                }
            }
           
                $desktop = new Deskbottom();
                $desktop->bottom_name         =$request->bottom_name;
                $desktop->bottom_price        =$request->bottom_price;
                $desktop->bottom_material     =$request->bottom_material;
                $desktop->bottom_colour       =implode(',',$request->bottom_colour);
                $desktop->bottom_description  =$request->bottom_description;
                $desktop->bottom_image        =($bottom_image)?$bottom_image:'';
                $desktop->bottom_status       = 1;
                $desktop->created_at       =date('Y-m-d');
                $desktop->updated_at       =date('Y-m-d');
                    if ($desktop->save()) {
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
                    'bottom_colour' => 'required',
                    'bottom_description' => 'required'
                  
                    ]);
                $hidden_bottom_image=$request->hidden_bottom_image;
                 $bottom_image="";
            if($request->hasFile('bottom_image')){
            
                    $file = $request->file('bottom_image');
                   $ext= $file->getClientOriginalExtension();
                    $bottom_image = rand(1000,9999).time().".".$ext;
                       if(!$file->move('public/desk_bottom_image/', $bottom_image)){
                       $bottom_image="";
                 
                }
            }
            if( $bottom_image == ""){
                $bottom_image=$hidden_bottom_image;
                
            }else{
                $bottom_image=$bottom_image;
                
            }
           
                $deskbottom = Deskbottom::where('bottom_id','=',$request->bottom_id)->first();;
                $deskbottom->bottom_name         =$request->bottom_name;
                $deskbottom->bottom_price        =$request->bottom_price;
                $deskbottom->bottom_material     =$request->bottom_material;
                $deskbottom->bottom_colour       =implode(',',$request->bottom_colour);
                $deskbottom->bottom_description  =$request->bottom_description;
                $deskbottom->bottom_image        =($bottom_image)?$bottom_image:'';
                $deskbottom->updated_at          =date('Y-m-d');
                    if ($deskbottom->save()) {
                        return \redirect('/view_desk_bottom')->with('success', 'Desk bottom details updated successfully!');
                    }else{
                        return \back()->with('fail', 'Failed to update desk bottom.');
                    }
         }
        public function editDeskBottom($id){
              $data['deskbottom']=Deskbottom::where('bottom_id','=',$id)->first();
              $data['colours']=Colour::where('is_deleted','=',0)->orderBy('id','desc')->get();
             $data['materials']=Material::where('is_deleted','=',0)->orderBy('id','desc')->get();
          return view('edit_desk_bottom',$data);
              
         }
           
}

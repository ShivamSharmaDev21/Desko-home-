<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
        public function index(){
            $materials=Material::where('is_deleted','=',0)->orderBy('id','desc')->get();
        //     echo "<pre>";
        //   print_r($banners);die;
            return view('view_materials',compact('materials'));
        }
        
        public function addMaterial(){
            return view('add_material');
        }
        
         public function storeMaterial(Request $request){
                 $request->validate([
                    'material_name' => 'required|regex:/^[a-zA-Z]+$/u'
                    // 'material_price' => 'required|numeric'
                    ]);
                $material = new Material();
                $material->material_name =$request->material_name;
              //  $material->material_price =$request->material_price;
                $material->created_at = date('Y-m-d');
                $material->updated_at = date('Y-m-d');
              
            
                    if ($material->save()) {
                     
                        return \redirect('/view_materials')->with('success', 'New material added successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to add material.');
                    }
         }
         
         public function editMaterial($id){
              $material=Material::where('id','=',$id)->first();
        // echo "<pre>";
        //   print_r($user);die;
          return view('edit_material',compact('material'));
              
         }
         
          public function updateMaterial(Request $request , $id){
            $request->validate([
                  'material_name' => 'required|regex:/^[a-zA-Z]+$/u'
                    // 'material_price' => 'required|numeric'
                    ]);
                $material = Material::where('id','=',$id)->first();
                $material->material_name =$request->material_name;
               // $material->material_price =$request->material_price;
                $material->created_at = date('Y-m-d');
                $material->updated_at = date('Y-m-d');
              
            
                    if ($material->save()) {
                     
                        return \redirect('/view_materials')->with('success', 'Material details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update material details.');
                    }
         }
         
            
         public function deleteMaterial($id){
              $material=Material::where('id','=',$id)->first();
                $material->is_deleted=1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($material->save()) {
                        return \redirect('/view_materials')->with('success', 'Material details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete material details.');
                    }
              
         }
           
}

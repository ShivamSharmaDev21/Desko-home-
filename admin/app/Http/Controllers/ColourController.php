<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colour;
use Illuminate\Support\Facades\DB;
class ColourController extends Controller
{
        public function index(){
            $colours=Colour::orderBy('id','desc')->where('is_deleted','=',0)->get();
        //     echo "<pre>";
        //   print_r($banners);die;
            return view('view_colours',compact('colours'));
        }
        
        public function addColour(){
            return view('add_colour');
        }
        public function addNumber(){
             $data['number']=DB::table('whatsapp')->first();
            //  print_r($colour);
            //  die;
            return view('add_number',$data);
        }
        
         public function storeColour(Request $request){
                 $request->validate([
                    'colour_name' => 'required|regex:/^[a-zA-Z]+$/u',
                    'colour_value' => 'required'
                   // 'colour_price' => 'required|numeric'
                    ]);
                $colour = new Colour();
                $colour->colour_name =$request->colour_name;
                $colour->colour_value =$request->colour_value;
              //  $colour->colour_price =$request->colour_price;
                $colour->created_at = date('Y-m-d');
                $colour->updated_at = date('Y-m-d');
              
                    if ($colour->save()) {
                      return \redirect('/view_colours')->with('success', 'Colour added successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to add colour.');
                    }
         }
         
         public function editColour($id){
              $colour=Colour::where('id','=',$id)->first();
        // echo "<pre>";
        //   print_r($user);die;
          return view('edit_colour',compact('colour'));
              
         }
         public function updateNumber(Request $request ){
              $whatsapp    = $request->whatsapp;
               $id    = $request->id;
              $status_updated= DB::table('whatsapp')->where('id',$id)->update(['whatsapp' => $whatsapp]);
                if ($status_updated) {
                      return \redirect('/addNumber')->with('success', 'Number Updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to Number Updated.');
                    }
         }
          public function updateColour(Request $request , $id){
            $request->validate([
                     'colour_name' => 'required|regex:/^[a-zA-Z]+$/u',
                       'colour_value' => 'required',
                 //   'colour_price' => 'required|numeric'
                    ]);
                $colour = Colour::where('id','=',$id)->first();
                 $colour->colour_name =$request->colour_name;
                  $colour->colour_value =$request->colour_value;
               // $colour->colour_price =$request->colour_price;
                $colour->updated_at = date('Y-m-d');
                    if ($colour->save()) {
                     
                        return \redirect('/view_colours')->with('success', 'Colour details updated successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to update colour details.');
                    }
         }
         
            
         public function deleteColour($id){
              $colour=Colour::where('id','=',$id)->first();
                $colour->is_deleted=1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($colour->save()) {
                        return \redirect('/view_colours')->with('success', 'Colour details deleted successfully!');
                    } else {
                        return \back()->with('fail', 'Failed to delete colour details.');
                    }
              
         }
           
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\MsgHomeModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class MsgHomeController extends Controller
{
    public function addMsg()
    {
        // return view('add_smart_feature');
        return view('add_msg_home');
    }

    public function storeMsg(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,svg|required|max:1524',
            'description'          => 'required'
            
          
          
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $mainFilename = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/msg_image_home/', $mainFilename)) {
                $mainFilename = "";
            }
        }
        $slider = new MsgHomeModel();
        $slider->title    = $request->title;
        $slider->image           = $mainFilename;
        $slider->description           = $request->description;
             
      
        if ($slider->save()) {
            return \redirect('view_msg_home')->with('success', 'Message added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }


    public function index()
    {
        $msg = MsgHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_msg_home', compact('msg'));
    }


    public function deleteMsg($id)
    {

        $smart_feature = MsgHomeModel::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_msg_home')->with('success', 'Message  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }


    public function updateMsg(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,svg|max:1524',
            'description'          => 'required'
            
        ]);
        $hidden_image = $request->hidden_image;
        $image = "";
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/msg_image_home/', $image)) {
                $image = "";
            }
        }
        if ($image == '') {
            $image = $hidden_image;
        } else {
            $image = $image;
        }
      


        $slider = MsgHomeModel::where('id', '=', $request->id)->first();
       
        $slider->title    = $request->title;
        $slider->image           = $image;
        $slider->description           = $request->description;


        if ($slider->save()) {

            return \redirect('/view_msg_home')->with('success', 'Message details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }


    public function editMsg($id)
    {
        $data['msg'] = MsgHomeModel::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_msg_home', $data);
    }



    //
}

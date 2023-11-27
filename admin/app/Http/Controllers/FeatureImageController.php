<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeatureImageModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class FeatureImageController extends Controller
{

    public function index()
    {

        return view('add_feature_image_home');
    }
    public function storeFeatureImage(Request $request)
    {

        $request->validate([
            'heading1'  => 'required|string|min:1|max:255',
            'heading2'  => 'required|string|min:1|max:255',
            'heading3'  => 'required|string|min:1|max:255',

            'heading4'  => 'required|string|min:1|max:255',
            'heading5'  => 'required|string|min:1|max:255',
            'heading6'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif|required|max:1524',
            'description1'          => 'required',
            'description2'          => 'required',
            'description3'          => 'required',
            'description4'          => 'required',
            'description5'          => 'required',
            'description6'          => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $mainFilename = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('feature_image_home/', $mainFilename)) {
                $mainFilename = "";
            }
        }
        $feature = new FeatureImageModel();

        $feature->image           = $mainFilename;
        $feature->description1           = $request->description1;
        $feature->description2           = $request->description2;
        $feature->description3           = $request->description3;
        $feature->description4           = $request->description4;
        $feature->description5           = $request->description5;
        $feature->description6           = $request->description6;
        $feature->heading1 = $request->heading1;
        $feature->heading2 = $request->heading2;
        $feature->heading3           = $request->heading3;
        $feature->heading4 = $request->heading4;
        $feature->heading5 = $request->heading5;
        $feature->heading6 = $request->heading6;
        if ($feature->save()) {
            return \redirect('/view_feature_image_home')->with('success', 'Feature image added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add feature image feature .');
        }
    }


    public function view()
    {
        $feature = FeatureImageModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        return view('view_feature_image_home', compact('feature'));
    }


    public function deleteImage($id)
    {

        $smart_feature = FeatureImageModel::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_feature_image_home')->with('success', 'Slider  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }


    public function changeFIHStatus(Request $request)
    {
        $smart = FeatureImageModel::where('id', '=', $request->smart_id)->first();
        $smart->image_status = $request->str;
        if ($smart->save()) {
            echo json_encode(['status' => true]);
        }
    }


    public function editFIH($id)
    {
        $data['FIH'] = FeatureImageModel::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_FIH', $data);
    }



    public function updateFIH(Request $request)
    {
        $request->validate([
            'heading1'  => 'required|string|min:1|max:255',
            'heading2'  => 'required|string|min:1|max:255',
            'heading3'  => 'required|string|min:1|max:255',

            'heading4'  => 'required|string|min:1|max:255',
            'heading5'  => 'required|string|min:1|max:255',
            'heading6'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif|max:1524',
            'description1'          => 'required',
            'description2'          => 'required',
            'description3'          => 'required',
            'description4'          => 'required',
            'description5'          => 'required',
            'description6'          => 'required'
        ]);
        $hidden_image = $request->hidden_image;
        $image = "";
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/feature_image_home/', $image)) {
                $image = "";
            }
        }
        if ($image == '') {
            $image = $hidden_image;
        } else {
            $image = $image;
        }



        $feature =  FeatureImageModel::where('id', '=', $request->id)->first();


        $feature->image           = $image;
        $feature->description1           = $request->description1;
        $feature->description2           = $request->description2;
        $feature->description3           = $request->description3;
        $feature->description4           = $request->description4;
        $feature->description5           = $request->description5;
        $feature->description6           = $request->description6;
        $feature->heading1 = $request->heading1;
        $feature->heading2 = $request->heading2;
        $feature->heading3           = $request->heading3;
        $feature->heading4 = $request->heading4;
        $feature->heading5 = $request->heading5;
        $feature->heading6 = $request->heading6;


        if ($feature->save()) {

            return \redirect('/view_feature_image_home')->with('success', 'Slider details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }
    //
}

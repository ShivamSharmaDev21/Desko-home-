<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ReviewHomeModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class ReviewHomeController extends Controller
{
    public function addReview()
    {
        // return view('add_smart_feature');
        return view('add_review_home');
    }

    public function index()
    {
        $review = ReviewHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_review_home', compact('review'));
    }

    public function deleteReview($id)
    {

        $smart_feature = ReviewHomeModel::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_review_home')->with('success', 'Review  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }



    public function updateReview(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,svg|max:1524',
            'description'          => 'required',
            'dsg' =>        'required|string|min:1|max:255'
        ]);
        $hidden_image = $request->hidden_image;
        $image = "";
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/review_image_home/', $image)) {
                $image = "";
            }
        }
        if ($image == '') {
            $image = $hidden_image;
        } else {
            $image = $image;
        }
      


        $slider = ReviewHomeModel::where('id', '=', $request->id)->first();
       
        $slider->name    = $request->name;
        $slider->image           = $image;
        $slider->description           = $request->description;
        $slider->designation = $request->dsg;     


        if ($slider->save()) {

            return \redirect('/view_review_home')->with('success', 'Review details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }

    public function editReview($id)
    {
        $data['review'] = ReviewHomeModel::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_review_home', $data);
    }



    public function storeReview(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,png|required|max:1524',
            'description'          => 'required',
            'dsg' =>        'required|string|min:1|max:255'
          
          
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $mainFilename = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/review_image_home/', $mainFilename)) {
                $mainFilename = "";
            }
        }
        $slider = new ReviewHomeModel();
        $slider->name    = $request->name;
        $slider->image           = $mainFilename;
        $slider->description           = $request->description;
        $slider->designation = $request->dsg;          
      
        if ($slider->save()) {
            return \redirect('view_review_home')->with('success', 'Review added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }
    //
}

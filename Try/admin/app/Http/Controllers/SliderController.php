<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;


class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_slider', compact('slider'));
    }

    public function addSlider()
    {
        // return view('add_smart_feature');
        return view('add_slider');
    }
    public function updateSlider(Request $request)
    {
        $request->validate([
            'slider_name'  => 'required',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,svg',
            'description'          => 'required'
        ]);
        $hidden_image = $request->hidden_image;
        $image = "";
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('slider_image/', $image)) {
                $image = "";
            }
        }
        if ($image == '') {
            $image = $hidden_image;
        } else {
            $image = $image;
        }
        $sm_feature = Slider::where('id', '=', $request->id)->first();

        $sm_feature->name     = $request->slider_name;
        $sm_feature->image            = $image;
        $sm_feature->description      = $request->description;


        if ($sm_feature->save()) {

            return \redirect('/view_slider')->with('success', 'Slider details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }
    public function storeSlider(Request $request)
    {
        $request->validate([
            'slider_name'  => 'required',
            'image'         => 'mimes:jpeg,jpg,png,gif,webp,svg|required',
            'description'          => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $mainFilename = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('slider_image/', $mainFilename)) {
                $mainFilename = "";
            }
        }
        $slider = new Slider();
        $slider->name    = $request->slider_name;
        $slider->image           = $mainFilename;
        $slider->description           = $request->description;
        if ($slider->save()) {
            return \redirect('/view_slider')->with('success', 'Slider added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }
    public function changeSliderStatus(Request $request)
    {
        $smart = Slider::where('id', '=', $request->smart_id)->first();
        $smart->slider_status = $request->str;
        if ($smart->save()) {
            echo json_encode(['status' => true]);
        }
    }
    public function editSlider($id)
    {
        $data['slider'] = Slider::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_slider', $data);
    }
    public function deleteSlider($id)
    {

        $smart_feature = Slider::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_slider')->with('success', 'Slider  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }
}

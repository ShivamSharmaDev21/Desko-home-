<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SliderHomeModal;
use Illuminate\Support\Facades\DB;

class SliderHomeController extends Controller
{
    public function index()
    {
        $slider = SliderHomeModal::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_slider_home', compact('slider'));
    }

    public function deleteSlider($id)
    {

        $smart_feature = SliderHomeModal::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_slider_home')->with('success', 'Slider  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }

    public function changeSliderStatus(Request $request)
    {
        $smart = SliderHomeModal::where('id', '=', $request->smart_id)->first();
        $smart->slider_status = $request->str;
        if ($smart->save()) {
            echo json_encode(['status' => true]);
        }
    }

    public function editSlider($id)
    {
        $data['slider'] = SliderHomeModal::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_slider_home', $data);
    }

    public function updateSlider(Request $request)
    {
        $request->validate([
            'slider_name'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif|max:1524',
            'description'    => 'required',
            'btn1_link' =>    'required|url',
            'btn2_link'      => 'required|url',
            'btn1_caption' => 'required|string|min:1|max:255',
            'btn2_caption' => 'required|string|min:1|max:255'
        ]);
        $hidden_image = $request->hidden_image;
        $image = "";
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $image = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/slider_image_home/', $image)) {
                $image = "";
            }
        }
        if ($image == '') {
            $image = $hidden_image;
        } else {
            $image = $image;
        }
      


        $slider = SliderHomeModal::where('id', '=', $request->id)->first();
        $slider->title    = $request->slider_name;
        $slider->image           = $image;
        $slider->description           = $request->description;
        $slider->btn2_caption           = $request->btn2_caption;
        $slider->btn1_caption = $request->btn1_caption;
        $slider->btn1_link           = $request->btn1_link;
        $slider->btn2_link = $request->btn2_link;


        if ($slider->save()) {

            return \redirect('/view_slider_home')->with('success', 'Slider details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }

    public function addSlider()
    {
        // return view('add_smart_feature');
        return view('add_slider_home');
    }


    public function storeSlider(Request $request)
    {
        $request->validate([
            'slider_name'  => 'required|string|min:1|max:255',
            'image'         => 'mimes:jpeg,jpg,png,gif|max:1524',
            'description'    => 'required',
            'btn1_link' =>    'required|url',
            'btn2_link'      => 'required|url',
            'btn1_caption' => 'required|string|min:1|max:255',
            'btn2_caption' => 'required|string|min:1|max:255'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $mainFilename = rand(1000, 9999) . time() . "." . $ext;
            if (!$file->move('public/slider_image_home/', $mainFilename)) {
                $mainFilename = "";
            }
        }
        $slider = new SliderHomeModal();
        $slider->title    = $request->slider_name;
        $slider->image           = $mainFilename;
        $slider->description           = $request->description;
        $slider->btn2_caption           = $request->btn2_caption;
        $slider->btn1_caption = $request->btn1_caption;
        $slider->btn1_link           = $request->btn1_link;
        $slider->btn2_link = $request->btn2_link;
        if ($slider->save()) {
            return \redirect('view_slider_home')->with('success', 'Slider added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }
    //
}

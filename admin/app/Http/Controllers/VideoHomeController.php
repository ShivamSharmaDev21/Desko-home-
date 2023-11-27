<?php

namespace App\Http\Controllers;

use App\Models\VideoHomeModal;
use Illuminate\Http\Request;


use App\Models\VideoHomeModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class VideoHomeController extends Controller
{

    public function editVideo($id)
    {
        $data['video'] = VideoHomeModel::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_video_home', $data);
    }



    public function updateVideo(Request $request)
    {
        $request->validate([
           
            'url'         => 'required',
            'btn_link' =>   'required|url',
            'btn_caption'         =>   'required|string|min:1|max:255'
          
        ]);
      $url=$request->url;



        $feature =  VideoHomeModel::where('id', '=', $request->id)->first();


        $feature->url           = $url;
        $feature->btn_caption           = $request->btn_caption;
        $feature->btn_link           = $request->btn_link;
      

        if ($feature->save()) {

            return \redirect('/edit_video_home/1')->with('success', 'Video details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Video details.');
        }
    }

    //
}

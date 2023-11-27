<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FaqHomeModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class FaqHomeController extends Controller
{

    public function index()
    {
        $faq = FaqHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_faq_home', compact('faq'));
    }



    public function addFAQ()
    {
        // return view('add_smart_feature');
        return view('add_faq_home');
    }

    public function deleteFAQ($id)
    {

        $smart_feature = FaqHomeModel::where('id', '=', $id)->first();
        $smart_feature->is_deleted = 1;
        // echo "<pre>";
        //   print_r($user);die;
        if ($smart_feature->save()) {
            return \redirect('/view_faq_home')->with('success', 'FAQ  deleted successfully!');
        } else {
            return \back()->with('fail', 'Failed to delete slider details.');
        }
    }

    public function editFAQ($id)
    {
        $data['faq'] = FaqHomeModel::where('id', '=', $id)->first();
        // echo "<pre>";
        //   print_r($smart_feature);die;
        return view('edit_faq_home', $data);
    }

    public function updateFAQ(Request $request)
    {
        $request->validate([
            'question'  => 'required',
           
            'ans'          => 'required'
            
            
        ]);
       
      


        $slider = FaqHomeModel::where('id', '=', $request->id)->first();
       
        $slider->question   = $request->question;
     
        $slider->ans          = $request->ans;


        if ($slider->save()) {

            return \redirect('/view_faq_home')->with('success', 'FAQ details updated successfully!');
        } else {
            return \back()->with('fail', 'Failed to update Slider details.');
        }
    }




    public function storeFAQ(Request $request)
    {
        $request->validate([
            'question'  => 'required',
           
            'ans'          => 'required'
            
          
          
        ]);
      
        $slider = new FaqHomeModel();
        $slider->question   = $request->question;
     
        $slider->ans          = $request->ans;
             
      
        if ($slider->save()) {
            return \redirect('view_faq_home')->with('success', 'FAQ added successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }



    //
}

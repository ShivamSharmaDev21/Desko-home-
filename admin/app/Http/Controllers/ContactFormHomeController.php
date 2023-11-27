<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormHomeModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;

class ContactFormHomeController extends Controller
{

    public function index()
    { 
        
        $form =	DB::table('contact_us')
                            ->select('*')
                            ->get();
        // echo "<pre>";print_r($banners);die;
        return view('view_form_home', compact('form'));
    }

    public function view($id)
    { 
        
        $form = ContactFormHomeModel::where('id', '=', $id)->first();
        return view('view_contact_form_home', compact('form'));
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'name'  => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric|digits:10',
           'profession' => 'required',
           'message' => 'required'
          
        ]);
       
        $slider = new ContactFormHomeModel();
        $slider->name    = $request->name;
        $slider->email= $request->email;
        $slider->phone_num=$request->phone;
        $slider->profession = $request->profession;
        $slider->msg=$request->message;
       
             
      
        if ($slider->save()) {
            return \redirect('/')->with('success', 'Message Sent Successfully!');
        } else {
            return \back()->with('fail', 'Failed to add slider feature .');
        }
    }
    //
}

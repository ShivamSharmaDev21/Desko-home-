<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderHomeModal;
use App\Models\FeatureImageModel;
use App\Models\VideoHomeModel;
use App\Models\ReviewHomeModel;
use App\Models\MsgHomeModel;
use App\Models\FaqHomeModel;
use App\Models\Product;

class FrontPageController extends Controller
{

    public function index()
    {
        
        $slider = SliderHomeModal::where('id', '=', '1')->first();
        $feature = FeatureImageModel::where('id', '=', '1')->first();
        $video = VideoHomeModel::where('id', '=', '1')->first();
        $review = ReviewHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        $msg = MsgHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        $faq = FaqHomeModel::where('is_deleted', '=', 0)->orderBy('id', 'desc')->get();
        $products= Product::where('status','=',2)->where('is_deleted','=',0)->orWhere('status','=',3)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();
        $productss= Product::where('status','=',1)->where('is_deleted','=',0)->orderBy('prod_id','desc')->get();

    //   echo '<pre>';
    //   print_r(compact('slider','feature', 'video','review','msg','faq','products'));
    //   echo '</pre>';
    //   die;
        return view('index_home',compact('slider','feature', 'video','review','msg','faq','products','productss'));
    }
    //
}

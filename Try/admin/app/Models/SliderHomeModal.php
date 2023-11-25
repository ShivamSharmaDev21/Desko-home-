<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderHomeModal extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'id';
       protected $table="slider_home";

     protected $fillable = [
         'image','title','description','btn1_link','btn2_link','btn1_captions','btn2_caption','slider_status','is_deleted'
    ];
    
}

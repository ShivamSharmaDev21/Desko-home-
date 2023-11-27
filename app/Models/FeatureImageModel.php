<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FeatureImageModel extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'id';
       protected $table="feature_image";

     protected $fillable = [
         'image','description1','description2','description3','description4','description5','description6','heading1','heading2','heading3','heading4','heading5','heading6','image_status','is_deleted'
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'top_id';

     protected $fillable = [
        'top_name','top_price','top_material','top_colour','top_description','top_image','top_status','is_deleted'
    ];
}

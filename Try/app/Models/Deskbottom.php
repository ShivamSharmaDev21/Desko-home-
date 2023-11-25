<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskbottom extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'bottom_id';

     protected $fillable = [
        'bottom_name','bottom_price','bottom_material','bottom_colour','bottom_description','bottom_image','bottom_status','is_deleted'
    ];
}

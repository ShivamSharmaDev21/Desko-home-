<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'id';

     protected $fillable = [
        'colour_name','colour_price','is_deleted'
    ];
}

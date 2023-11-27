<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 

     protected $fillable = [
        'code','code_name','code_image','status','t_and_q','product_price','created_at','updated_at'
    ];
}
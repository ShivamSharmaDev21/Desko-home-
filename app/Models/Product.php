<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'prod_id';

     protected $fillable = [
        'cat_id','prod_name','feature_image','offer_price','mrp_price','description','status','is_deleted'
    ];
}

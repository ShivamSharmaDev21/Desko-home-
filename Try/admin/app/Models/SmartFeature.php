<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SmartFeature extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'id';

     protected $fillable = [
         'feature_name','image', 'price','description', 'status','is_deleted', 'short_note','sl_number'
    ];
    public function insertSmartFeatureData($tbl,$itm_arr){
         $data=DB::table($tbl)->insert($itm_arr);
         return $data;
    }
}

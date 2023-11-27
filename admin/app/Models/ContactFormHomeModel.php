<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactFormHomeModel extends Model
{
   	 use HasFactory;
   	 
 	 public $timestamps=false;
 	 
  	 protected $primaryKey = 'id';
       protected $table="contact_form_home";

     protected $fillable = [
        'name', 'email', 'phone_num', 'profession', 'msg'
    ];
    
}

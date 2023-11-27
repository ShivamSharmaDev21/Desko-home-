<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ReviewHomeModel extends Model
{
    use HasFactory;

    public $timestamps=false;
 	 
    protected $primaryKey = 'id';
    protected $table="review_home";

  protected $fillable = [
    'image', 'description', 'name', 'designation'
 ];
}

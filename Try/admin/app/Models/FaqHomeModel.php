<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FaqHomeModel extends Model
{
    use HasFactory;

    public $timestamps=false;
 	 
    protected $primaryKey = 'id';
    protected $table="faq_home";

  protected $fillable = [
    'question', 'ans'
 ];
}

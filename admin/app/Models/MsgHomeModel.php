<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MsgHomeModel extends Model
{
    use HasFactory;

    public $timestamps=false;
 	 
    protected $primaryKey = 'id';
    protected $table="msg_home";

  protected $fillable = [
    'image', 'description', 'title'
 ];
}

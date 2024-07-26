<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{

     // protected $fillable = [];
     protected $fillable = ['id','Name','Email','Subject','Message'];
     //Fillable - data insert into database
     public $timestamps = true;
    
    use HasFactory;
}

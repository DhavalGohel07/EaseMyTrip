<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminlogin extends Model
{
    protected $fillable = ['id','Name','Email','PhoneNumber','Password'];
    public $timestamps = true;
   
    use HasFactory;
}

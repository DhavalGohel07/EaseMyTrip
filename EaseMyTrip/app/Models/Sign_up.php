<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign_up extends Model
{
    // protected $fillable = [];
    protected $fillable = ['id','Name','Email','PhoneNumber','Password'];
    //Fillable - data insert into database
    public $timestamps = true;
   
    use HasFactory;
}

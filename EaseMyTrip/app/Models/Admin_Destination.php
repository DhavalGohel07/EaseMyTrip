<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Destination extends Model
{
    //Fillable - data insert into database
    // protected $fillable = ['dest_image'];
    protected $fillable = ['id','dname','ddays','ddesc','dplace','dprice','dest_image','dcat'];
  
    public $timestamps = true;
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Resort extends Model
{
    protected $fillable = ['id','rname','rdays','rdesc','rprice','rfacilities','rimage'];
  
    public $timestamps = true;
    use HasFactory;
}

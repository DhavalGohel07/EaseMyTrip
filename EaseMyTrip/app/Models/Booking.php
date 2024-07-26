<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['id','email','name','price','phone','person','date','paymentid'];
  
    public $timestamps = true;
    use HasFactory;
}

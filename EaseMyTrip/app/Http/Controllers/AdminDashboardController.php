<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Admin_Destination;
use App\Models\Admin_Resort;

use App\Models\Contactus;
use App\Models\Sign_up;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {


        $destination = Admin_Destination::pluck('dname')->toArray();
        $dalldata = Booking::whereIn('name', $destination)->get();

        $resort = Admin_Resort::pluck('rname')->toArray();
        $ralldata = Booking::whereIn('name', $resort)->get();

      
        $contact = Contactus::all(); 
        $loginuser = Sign_up::all(); 

         
      

        return view('Admin.Dashboard', compact('dalldata','contact','ralldata','loginuser'));


    }
}

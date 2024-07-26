<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\AdminDestinationController;
use App\Models\Admin_Destination;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index() {   
        $alldata = Admin_Destination::all(); // Second Form Data
        return view('User.Destination', compact('alldata'));

        $request->session() -> put('LoggedUser', $request->Email);
      

    }


    public function retdata(Request $request){

        


    }

}

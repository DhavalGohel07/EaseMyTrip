<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminResortController;
use App\Http\Controllers\ResortController;
use App\Models\Admin_Resort;




class ResortController extends Controller
{
    public function index() {   
        $alldata = Admin_Resort::all(); // Second Form Data
        return view('User.Resort', compact('alldata'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function registerPost(Request $request)
    {
        $user = new Adminlogin();
 
        $user->Name = $request->Name;
        $user->PhoneNumber = $request->PhoneNumber;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);

        $user->save();
 
        $request->session() -> put('LoggedUser', $request->Email);
        return redirect('admin-dash');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        
        $credetials = $request->validate([
            'Email' => 'required',
            'Password' => 'required'
        ]);
 
        
        $user = Adminlogin::where('Email','=',$request->Email)->first();
         
        if ($user) {
            if(Hash::check($request->Password, $user->Password)){
                    $request->session() -> put('LoggedUser', $request->Email);
                  return redirect('/admin-dash');
             }else{
                return back()->with('error', 'Password is not correct !!');
             }
        }
        else{
            return back()->with('error', 'Invalid Email or Password !!');
        }
    }


    
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('admin.login');
    }
}

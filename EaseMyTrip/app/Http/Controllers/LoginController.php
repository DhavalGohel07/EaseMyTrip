<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sign_up;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function register()
    {
        return view('user.register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new Sign_up();
 
        $user->Name = $request->Name;
        $user->PhoneNumber = $request->PhoneNumber;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);

        $user->save();
 
        $request->session() -> put('LoggedUser', $request->Email);
                   // return redirect('/')->with('success', 'You are now logged in');
                   return view('user.home')-> with('Success', "You Logged In Successfully");
 }
 
    public function login()
    {
        return view('user.login');
    }
 
    public function loginPost(Request $request)
    {
        //dd($request->all());
        
        $credetials = $request->validate([
            'Email' => 'required',
            'Password' => 'required'

        ]);
 
        
        $user = Sign_up::where('Email','=',$request->Email)->first();
         
        if ($user) {
            if(Hash::check($request->Password, $user->Password)){
                    $request->session() -> put('LoggedUser', $request->Email);
                   // return redirect('/')->with('success', 'You are now logged in');
                   return view('user.home')-> with('Success', "You Logged In Successfully");
             }else{
                return back()->with('error', 'Password is not correct !!');
             }
        }
        // }else{

        //     return  back()->with('fail', 'No account found for this email');
            
        
        else{

            return back()->with('error', 'Invalid Email or Password !!');

        }
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('user.login');
    }


}
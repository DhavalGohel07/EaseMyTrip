<?php

namespace App\Http\Controllers;
use App\Models\Sign_Up;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    public function index(Request $request)
    {
        return view('user.ForgotPassword');
    }

    public function confirmpassword(Request $request)
    {
        return view('user.confirmpassword');
    }


    public function changepassword(Request $request)
    {
        // dd($request->all());

        $email = $request->input('Email');
        $pass = $request->input('Password'); 
        $pass1 = $request->input('cPassword'); 

     
      
      if($pass == $pass1){
        // $user = Sign_up::where('Email','=',$email)->first();
        // if ($user) {
            
           
            Sign_Up::where('Email',$email)->update([
                'Password' => Hash::make($request['Password'])
                
                
            ]);
            return redirect('login');
              

                // }
            //     else{
            //     return back()->with('error', 'Email is not correct !!');
            //  }
    
        }
        else{
            return back()->with('error', 'Password does not match !!');

        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OTPverifyController extends Controller
{
    public function index(Request $request){
    
        return view('User.Otpverify');
    
    }

    public function findex(Request $request){
    
        return view('User.Forgototpverify');
    
    }
    public function otpcheck(Request $request){
    
        $otp = implode('', $request->input('otp'));
        $email = $request->email;
        $emailotp = $request->emailotp;
        
        // dd($request->all());
        // dd($emailotp);

        if($otp == $emailotp) {
            // return back()->with('error', 'OTP is correct');
       
            return redirect('register');
        }
        else{
            return back()->with('error', 'Enter Valid OTP');
        }
    }


    public function fotpcheck(Request $request){
    
        $otp = implode('', $request->input('otp'));
        $email = $request->email;
        $emailotp = $request->emailotp;
        
        // dd($request->all());
        // dd($emailotp);

        if($otp == $emailotp) {
            // return back()->with('error', 'OTP is correct');
       
            return redirect('confirm-password');
        }
        else{
            return back()->with('error', 'Enter Valid OTP');
        }
    }

}

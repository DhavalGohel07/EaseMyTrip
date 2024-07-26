<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index(Request $request){


        $otp = rand(100000, 999999);

        $mailData=[
            'otp'=>$otp,
            
        ];
        Mail::to($request->email)->send(new SendMail($mailData));
        // echo  "Email Sent Successfully! .$otp";

        $email = $request->email;

        $request->session()->put('otp', $otp);
        $request->session()->put('email', $email);

        //  return view('User.Otpverify',compact('email','otp'));
      return redirect('Verify-otp');

    }

    public function findex(Request $request){


        $otp = rand(100000, 999999);

        $mailData=[
            'otp'=>$otp,
            
        ];
        Mail::to($request->email)->send(new SendMail($mailData));
        // echo  "Email Sent Successfully! .$otp";

        $email = $request->email;

        $request->session()->put('otp', $otp);
        $request->session()->put('email', $email);

        //  return view('User.Otpverify',compact('email','otp'));
      return redirect('fVerify-otp');

    }

   
}

<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Sign_up;
use Illuminate\Http\Request;
use PDF;

class HistoryController extends Controller
{
    public function index(Request $request ){




        $email = $request->session() -> get('email');  //get the email
        // echo $email;
        
        // $ddata = Booking::where('email',$email);
        // $name = $ddata->name;
        // $price = $ddata->price;
        // $person = $ddata->person;
        // $date = $ddata->date;
        // $paymentid = $ddata->paymentid;
        // $alldata = Booking::where('email',$email)->first();
      // Generate a random number between 1000 and 9999
        $alldata = Booking::where('email', $email)->get();


        
        return view('user.history', compact('alldata'));

    }





  
    public function downloadPDF(Request $request,$id)
    {
        // Your logic to fetch data and prepare it for PDF generation
       
       
      

    //    dd($id);
    $email =   $request->session() -> get('email'); 
        $alldata = Booking::where('id',$id)->get();
       
       
        $name = Sign_up::where('Email',$email)->get()->first();

        $pname = $name->Name;
        $id = rand(1000, 9999);

        //     // dd($id);
        // Generate the PDF with a full-page view
        $pdf = PDF::loadView('user.sample',compact('alldata','id','pname'));

        // // Set paper size and orientation (optional)
        $pdf->setPaper('A10', 'portrait'); // You can change 'A4' to other sizes like 'letter', 'legal', etc.

        // // Download the PDF file
        return $pdf->download('sample.pdf');
    }
}

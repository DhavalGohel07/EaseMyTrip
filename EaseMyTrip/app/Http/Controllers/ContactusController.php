<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // $validator = Validator::make($request->all(), [
        //     'Examination' => 'required',
        //     'Institute' => 'required',
        //     'Passing' => 'required',
        //     'Percentage' => 'required',
        //     'Specialization' => 'required',

        // ]);
        // if ($validator->fails()) {
        //     return Redirect::back()->withErrors($validator)->withInput();
        // }


        // dd($request->all());


        Contactus::create([

            'Name' => $request->C_Name,
            'Email' => $request->C_Email,
            'Subject' => $request->C_Subject,
            'Message' => $request->C_Message,
                
        ]);
       

       
        return redirect('contact');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactus $contactus)
    {
        
    }
}

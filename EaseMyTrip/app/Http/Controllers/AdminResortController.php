<?php

namespace App\Http\Controllers;

use App\Models\Admin_Resort;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alldata = Admin_Resort::all(); // Second Form Data
        return view('Admin.Resort', compact('alldata'));
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
             // dd($request->all());
             $user = new Admin_Resort();

             $user->rname = $request->rname;
             $user->rdays = $request->rdays;
             $user->rdesc = $request->rdesc;
             $user->rprice = $request->rprice;
             $user->rfacilities = $request->rfacilities;
            
             // Handle image upload
             $image = $request->rimage;
             $name = $image->getClientOriginalName();
             $image->storeAs('public/images',$name);
             $user->rimage= $name;
             $user -> save();
             return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin_Resort $admin_Resort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin_Resort $resort,$id)
    {
        $resort = Admin_Resort::find($id);
        $all = $resort::all();
        return view('Edit.editResort',compact('resort','all'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin_Resort $resort,$id)
    {
        $resort = Admin_Resort::find($id);
        Admin_Resort::where('id',$resort->id)->update([
            'rname' => $request['rname' ],
            'rdays' => $request['rdays' ],
            'rdesc' => $request['rdesc' ],
            'rprice' => $request['rprice'],
            'rfacilities' => $request['rfacilities']
               
        ]);
        return redirect('admin-resort');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin_Resort $admin_Resort,$id  )
    {
        Admin_Resort::where('id', $id)->delete();
        return redirect('admin-resort');
    }
}

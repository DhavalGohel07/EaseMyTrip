<?php

namespace App\Http\Controllers;

use App\Models\Admin_Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $alldata = Admin_Destination::all(); // Second Form Data
        return view('Admin.Destination', compact('alldata'));


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

     
        $user = new Admin_Destination();

        $user->dname = $request->dname;
        $user->ddays = $request->ddays;
        $user->ddesc = $request->ddesc;
        $user->dplace = $request->dplace;
        $user->dprice = $request->dprice;
        $user->dcat = $request->dcat;
       
        // Handle image upload
        $image = $request->dimage;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images',$name);
        $user->dest_image= $name;
        $user -> save();
        return back();
        
      
           }

    /**
     * Display the specified resource.
     */
    public function show(Admin_Destination $admin_Destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin_Destination $admin_Destination,$id)
    {
        $admin = Admin_Destination::find($id);
        $all = $admin::all();
        return view('Edit.editDestinantion',compact('admin','all'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin_Destination $admin,$id)
    {
        $admin = Admin_Destination::find($id);
        Admin_Destination::where('id',$admin->id)->update([
            'dname' => $request['dname'],
            'ddays' => $request['ddays'],
            'ddesc' => $request['ddesc'],
            'dplace' => $request['dplace'],
            'dprice' => $request['dprice'],
            
        ]);
        return redirect('admin-destination');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin_Destination $admin_Destination,$id, Request $request)
    {
        // dd($request->all());

        Admin_Destination::where('id', $id)->delete();
        return redirect('admin-destination');
    }
}

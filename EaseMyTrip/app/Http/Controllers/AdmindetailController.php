<?php

namespace App\Http\Controllers;

use App\Models\Admindetail;
use App\Models\Adminlogin;

use Illuminate\Http\Request;

class AdmindetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alldata = Adminlogin::all();
        return view('admin.admin', compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admindetail $admindetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admindetail $admindetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admindetail $admindetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admindetail $admindetail)
    {
        //
    }
}

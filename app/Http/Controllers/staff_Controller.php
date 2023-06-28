<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class staff_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = staff::all();
        return view('Staff.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $newStaff = new staff();
        $newStaff->Name = $request->name;
        $newStaff->Email = $request->email;
        $newStaff->Phone =$request->phone;
        $newStaff->save();

        return redirect()->route('Staff.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = staff::findOrFail($id);
        return view('Staff.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $Staff = staff::findOrFail($id);
        $Staff->Name = $request->name;
        $Staff->Email = $request->email;
        $Staff->Phone =$request->phone;
        $Staff->save();

        return redirect()->route('Staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Staff = staff::findOrFail($id);
        $Staff->delete();

        return redirect()->route('Staff.index');
    }
}

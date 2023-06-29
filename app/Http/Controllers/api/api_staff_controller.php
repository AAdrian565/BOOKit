<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiStaff\AddStaffRequest;
use App\Http\Requests\ApiStaff\DeleteStaffRequest;
use App\Http\Requests\ApiStaff\EditStaffRequest;
use App\Models\staff;
use Illuminate\Http\Request;

class api_staff_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = staff::all();
        return response($data);
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
    public function store(AddStaffRequest $request)
    {

        $newStaff = new staff();
        $newStaff->Name = $request->name;
        $newStaff->Email = $request->email;
        $newStaff->Phone =$request->phone;
        $newStaff->save();

        return response('Sucessfully add Staff');
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditStaffRequest $request, string $id)
    {

        $Staff = staff::findOrFail($id);
        $Staff->Name = $request->name;
        $Staff->Email = $request->email;
        $Staff->Phone =$request->phone;
        $Staff->save();

        return response('Sucessfully update Staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteStaffRequest $request, string $id)
    {
        $Staff = staff::findOrFail($id);
        $Staff->delete();

        return response('Sucessfully delete Staff');
    }
}

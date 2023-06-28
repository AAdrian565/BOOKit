<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\booking;
use App\Models\roomStatus;
use Illuminate\Http\Request;

class booking_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = booking::all();
        $data2 = room::all();

        // if($request->RoomNumber){
        //     $data = booking::with('booking')->where('Room_id',$request->RoomNumber)->get();
        // }

        return view('Booking.index',compact('data','data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = roomStatus::all();
        return view('Booking.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Rooms' => 'required',
            'Name' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
        ],
        );

        $newBooking = new booking();
        $newBooking->Room_id = $request->Rooms;
        $newBooking->Name = $request->Name;
        $newBooking->Email = $request->Email;
        $newBooking->Phone = $request->Phone;
        $newBooking->save();

        return redirect()->route('Booking.index');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

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

        // if($request->RoomNumber){
        //     $data = booking::with('booking')->where('Room_id',$request->RoomNumber)->get();
        // }

        return view('Booking.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = room::all();
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

        $Room = room::findOrFail($request->Rooms);
        $Room->Status_id = 1;
        $Room->save(); 

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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        //
        $Room = booking::findOrFail($id);
        $Room->delete();

        $RoomSettings = room::findOrFail($request->idRoom);
        $RoomSettings->delete();

        return redirect()->route('Booking.index');
    }
}

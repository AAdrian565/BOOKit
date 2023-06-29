<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\room;
use Illuminate\Http\Request;

class api_booking_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = booking::all();

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
    public function store(Request $request)
    {
        $newBooking = new booking();
        $newBooking->Room_id = $request->Rooms;
        $newBooking->Name = $request->Name;
        $newBooking->Email = $request->Email;
        $newBooking->Phone = $request->Phone;
        $newBooking->save();

        $Room = room::findOrFail($request->Rooms);
        $Room->Status_id = 1;
        $Room->save(); 

        return response('Succesfully Add Booking');
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
        $Room = booking::findOrFail($id);
        $Room->delete();

        $RoomSettings = room::findOrFail($request->idRoom);
        $RoomSettings->delete();

        return response('Succesfully Delete Booking');
    }
}

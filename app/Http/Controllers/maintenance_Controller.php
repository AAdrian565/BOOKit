<?php

namespace App\Http\Controllers;

use App\Models\roomStatus;
use App\Models\maintenance;
use App\Models\room;
use App\Models\staff;
use Illuminate\Http\Request;

class maintenance_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = maintenance::all();
        return view('Maintenance.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = room::all();
        $data2 = staff::all();
        return view('Maintenance.create',compact('data', 'data2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Rooms' => 'required',
            'Staff_id' => 'required',
            'Description' => 'required',
        ],
        );

        $newMaintenance = new maintenance();
        $newMaintenance->Room_id = $request->Rooms;
        $newMaintenance->Staff_id = $request->Staff_id;
        $newMaintenance->Description = $request->Description;
        $newMaintenance->save();

        $Room = room::findOrFail($request->Rooms);
        $Room->Status_id = 2;
        $Room->save();

        return redirect()->route('Maintenance.index');
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
        $data = room::all();
        $data2 = staff::all();
        $data3 = maintenance::findOrFail($id);
        return view('Maintenance.edit',compact('data', 'data2','data3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'Room_id' => 'required',
            'Staff_id' => 'required',
            'Description' => 'required',
        ],
        );


        $Room = room::findOrFail($request->idRoom);
        $Room->Status_id = 3;
        $Room->save();

        $Maintenance = maintenance::findOrFail($id);
        $Maintenance->Room_id = $request->Rooms;
        $Maintenance->Staff_id = $request->Staff_id;
        $Maintenance->Description =$request->Description;
        $Maintenance->save();

        $Room = room::findOrFail($request->Rooms);
        $Room->Status_id = 2;
        $Room->save();

        return redirect()->route('Maintenance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $Maintenance = Maintenance::findOrFail($id);
        $Maintenance->delete();

        $RoomSettings = room::findOrFail($request->idRoom);
        $RoomSettings->delete();

        return redirect()->route('Maintenance.index');
    }
}

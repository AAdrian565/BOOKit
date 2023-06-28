<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\roomStatus;
use Illuminate\Http\Request;

class addRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = room::orderBy('Date','Asc')->get();
        $data2 = roomStatus::all();

        if($request->RoomNumber){
            $data = room::with('roomStatus')->where('Room_id',$request->RoomNumber)->get();
        }

        return view('AddRoom.index',compact('data','data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $data = roomStatus::all();
        return view('AddRoom.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Rooms' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'date' => 'required',
            'timeStart' => 'required',
            'timeEnd' => 'required',
        ],
        );

        $newRoom = new room();
        $newRoom->Room_id = $request->Rooms;
        $newRoom->Capacity = $request->capacity;
        $newRoom->Description = $request->description;
        $newRoom->Date = $request->date;
        $newRoom->TimeStart = $request->timeStart;
        $newRoom->TimeEnd = $request->timeEnd;
        $newRoom->Status_id = 3;
        $newRoom->save();

        return redirect()->route('AddRoom.index');
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
        $data = room::findOrFail($id);
        $data2 = roomStatus::all();
        return view('AddRoom.edit',compact('data','data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Rooms' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'date' => 'required',
            'timeStart' => 'required',
            'timeEnd' => 'required',
        ]);

        $Room = room::findOrFail($id);
        $Room->Room_id =  $request->Rooms;
        $Room->Capacity = $request->capacity;
        $Room->Description = $request->description;
        $Room->Date = $request->date;
        $Room->TimeStart = $request->timeStart;
        $Room->TimeEnd = $request->timeEnd;
        $Room->save();

        return redirect()->route('AddRoom.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Room = room::findOrFail($id);
        $Room->delete();

        return redirect()->route('AddRoom.index');
    }
}

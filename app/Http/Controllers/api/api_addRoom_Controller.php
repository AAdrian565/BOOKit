<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRoomSettings\AddRoomSettingsRequest;
use App\Http\Requests\ApiRoomSettings\DeleteRoomSettingsRequest;
use App\Http\Requests\ApiRoomSettings\EditRoomSettingsRequest;
use App\Models\room;
use Illuminate\Http\Request;

class api_addRoom_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = room::orderBy('Date','Asc')->get();

        return response($data);
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
    public function store(AddRoomSettingsRequest $request)
    {

        $newRoom = new room();
        $newRoom->Room_id = $request->Rooms;
        $newRoom->Capacity = $request->capacity;
        $newRoom->Description = $request->description;
        $newRoom->Date = $request->date;
        $newRoom->TimeStart = $request->timeStart;
        $newRoom->TimeEnd = $request->timeEnd;
        $newRoom->Status_id = 3;
        $newRoom->save();

        return response("Successfully Add Room Schedule");
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
    public function update(EditRoomSettingsRequest $request, string $id)
    {

        $Room = room::findOrFail($id);
        $Room->Room_id =  $request->Rooms;
        $Room->Capacity = $request->capacity;
        $Room->Description = $request->description;
        $Room->Date = $request->date;
        $Room->TimeStart = $request->timeStart;
        $Room->TimeEnd = $request->timeEnd;
        $Room->save();

        return response("Successfully Update Room Schedule");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteRoomSettingsRequest $request, string $id)
    {
        $Room = room::findOrFail($id);
        $Room->delete();

        return response("Successfully Delete Room Schedule");
    }
}

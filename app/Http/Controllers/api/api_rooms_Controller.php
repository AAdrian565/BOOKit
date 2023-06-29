<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRooms\AddRoomsRequest;
use App\Http\Requests\ApiRooms\DeleteRoomsRequest;
use App\Http\Requests\ApiRooms\UpdateRoomsRequest;
use App\Models\roomStatus;
use Illuminate\Http\Request;

class api_rooms_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = roomStatus::all();
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
    public function store(AddRoomsRequest $request)
    {
        $newRooms = new roomStatus();
        $newRooms->Name = $request->Name;
        $newRooms->Maintenanced = 0;
        $newRooms->save();

        return response("Successfully Add Rooms");
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
    public function update(UpdateRoomsRequest $request, string $id)
    {
        $request->validate([
            'inputs.*.Name' => 'required',
        ]);

        $Rooms = roomStatus::findOrFail($id);
        $Rooms->Name = $request->Name;
        $Rooms->save();

        return response("Successfully Update Rooms");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteRoomsRequest $request, string $id)
    {
        $Rooms = roomStatus::findOrFail($id);
        $Rooms->delete();

        return response("Successfully Delete Rooms");
    }
}

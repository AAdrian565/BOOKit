<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiMaintenance\AddMaintenanceRequest;
use App\Http\Requests\ApiMaintenance\DeleteMaintenanceRequest;
use App\Http\Requests\ApiMaintenance\EditMaintenanceRequest;
use App\Models\maintenance;
use App\Models\room;
use Illuminate\Http\Request;

class api_maintenance_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = maintenance::all();
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
    public function store(AddMaintenanceRequest $request)
    {
        $newMaintenance = new maintenance();
        $newMaintenance->Room_id = $request->Rooms;
        $newMaintenance->Staff_id = $request->Staff_id;
        $newMaintenance->Description = $request->Description;
        $newMaintenance->save();

        $Room = room::findOrFail($request->Rooms);
        $Room->Status_id = 2;
        $Room->save();

        return response('Successfully Add Maintenance Schedule');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditMaintenanceRequest $request, string $id)
    {
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

        return response('Sucessfully update Maintenance Schedule');
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

        return response('Successfully Delete maintenance Schedule');
    }
}

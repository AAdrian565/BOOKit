<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiCategory\AddCategoryRequest;
use App\Http\Requests\ApiCategory\DeleteCategoryRequest;
use App\Http\Requests\ApiCategory\UpdateCategoryRequest;
use App\Http\Requests\ApiRooms\DeleteRoomsRequest;
use App\Models\category;
use Illuminate\Http\Request;

class api_category_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = category::all();
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
    public function store(Request $request)
    {

        $newCategory = new category();
        $newCategory->Name = $request->Name;
        $newCategory->save();
        return response("Category Status Succesfully Added");
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
    public function update(UpdateCategoryRequest $request, string $id)
    {

        $Category = Category::findOrFail($id);
        $Category->Name = $request->Name;
        $Category->save();

        return response("Update Status Category Success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteCategoryRequest $request,string $id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();

        return response('Delete Category Status Success');
    }
}

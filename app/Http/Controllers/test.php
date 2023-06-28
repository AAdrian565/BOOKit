<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class test extends Controller
{
    public function index(){
        $room = room::find(1)->category;
        var_dump($room);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    use HasFactory;

    public function staffs(){
        return $this->belongsTo(staff::class,'Staff_id');
    }

    public function roomSet(){
        return $this->belongsTo(room::class,'Room_id');
    }

    public function roomStats(){
        return $this->belongsTo(roomStatus::class,'Room_id');
    }

    public function roomsName(){
        return $this->belongsTo(roomStatus::class,room::class,'Room_id');
    }
}

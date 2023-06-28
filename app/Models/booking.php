<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    public function roomSettings(){
        return $this->belongsTo(room::class,'room_id');
    }

    public function roomAvail(){
        return $this->belongsTo(roomStatus::class,'room_id');
    }
}

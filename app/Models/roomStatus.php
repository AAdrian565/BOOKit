<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomStatus extends Model
{
    use HasFactory;

    protected $fillable=[
        'Name',
        'Maintenanced'
    ];

    public function rooms()
    {
        return $this->hasMany(room::class);
    }

    public function bookings()
    {
        return $this->hasOne(booking::class);
    }
}

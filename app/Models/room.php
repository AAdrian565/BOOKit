<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\category;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'shift_id'
    ];

    public function category()
    {
        return $this->belongsTo(category::class,'Status_id');
    }

    public function roomStatus()
    {
        return $this->belongsTo(roomStatus::class,'Room_id');
    }

    public function books()
    {
        return $this->hasOne(booking::class);
    }


}

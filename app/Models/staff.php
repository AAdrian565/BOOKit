<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    public function maintenanced()
    {
        return $this->hasMany(maintenance::class);
    }
}

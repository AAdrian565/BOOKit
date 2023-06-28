<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\room;

class category extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name'
    ];

    public function room()
    {
        return $this->hasMany(room::class);
    }
}

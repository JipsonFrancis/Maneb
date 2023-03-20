<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'blackbox_id',
        'driver_id',
        'truck_id',
        'initial_location',
        'destination',
    ];
}

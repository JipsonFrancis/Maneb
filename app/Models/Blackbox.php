<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blackbox extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'transit_id',
        'initial_location',
        'destination',
        'QR'
    ];
}

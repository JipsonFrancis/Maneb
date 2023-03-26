<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

// Eloquent Relationships
    public function packs(): HasMany
    {
        return $this->hasMany(Packet::class);
    }

    public function origin(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'initial_location');
    }

    public function current(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'current_location');
    }

    public function endLocation(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'destination');
    }

    public function transit(): BelongsTo
    {
        return $this->belongsTo(Transit::class);
    }

    public function checkpoint(): HasMany
    {
        return $this->hasMany(Checkpoint::class);
    }


}

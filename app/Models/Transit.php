<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'driver_id',
        'truck_id',
        'initial_location',
        'destination',
    ];

    // Eloquent Relationships
    public function boxes(): HasMany
    {
        return $this->hasMany(Blackbox::class);
    }

    public function origin(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'initial_location');
    }

    public function endLocation(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'destination');
    }

    
    public function driver(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'driver_id');
    }

    public function truck(): BelongsTo
    {
        return $this->belongsTo(Truck::class);
    }

    public function checkpoints(): HasMany
    {
        return $this->hasMany(Checkpoint::class);
    }
 
}

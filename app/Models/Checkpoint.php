<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Checkpoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'invigilator',
        'transit_id',
        'box'
        //location
    ];

// Eloquent Relationships
    public function head(): HasOne 
    {
        return $this->hasOne(User::class, 'id','invigilator');
    }

    public function center(): BelongsTo 
    {
        return $this->belongsTo(Center::class,'id', 'location');
    }

    public function transit(): BelongsTo
    {
        return $this->belongsTo(Transit::class);
    }

    public function blackbox(): BelongsTo
    {
        return $this->belongsTo(Blackbox::class, 'box');
    }
}

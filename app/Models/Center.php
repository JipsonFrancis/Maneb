<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'invigilator',
        'type',
        'iframe',
        'longitude',
        'latitude',
    ];

// Eloquent Relationships
    public function boxes(): HasMany
    {
        return $this->hasMany(Blackbox::class, 'current_location');
    }

    public function originated(): HasMany
    {
        return $this->hasMany(Blackbox::class, 'initial_location');
    }

    public function head(): HasOne 
    {
        return $this->hasOne(User::class, 'id','invigilator');
    }
    
    public function checkpoints(): HasMany 
    {
        return $this->hasMany(Checkpoint::class);
    }

}

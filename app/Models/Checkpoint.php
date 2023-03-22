<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Checkpoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'invigilator',
        'center_id',
    ];

// Eloquent Relationships
    public function head(): HasOne 
    {
        return $this->hasOne(User::class, 'id','invigilator');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Packet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'exam_paper',
        'initial_location',
        'destination',
        'blackbox_id',
        'QR'
    ];

// Eloquent Relationships
    public function box(): BelongsTo
    {
        return $this->belongsTo(Blackbox::class, 'blackbox_id');
    }

    public function paper(): HasOne
    {
        return $this->hasOne(ExamPaper::class,'id', 'exam_paper');
    }

    public function origin(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'initial_location');
    }

    public function endLocation(): HasOne
    {
        return $this->hasOne(Center::class, 'id', 'destination');
    }
}

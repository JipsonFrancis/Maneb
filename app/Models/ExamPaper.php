<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ExamPaper extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'exam_id',
        'subject_id',
        'invigilator',
        'paper_number',
        'date'
    ];

// Relationships
    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function pack():BelongsTo
    {
        return $this->belongsTo(Packet::class, 'id','exam_paper');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

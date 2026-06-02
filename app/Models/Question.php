<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $appends = ['question_url'];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

    public function getQuestionUrlAttribute()
    {
        $school = $this->exam->subject->course->school->slug;
        $course = $this->exam->subject->course->slug;
        $exam = $this->exam->slug;

        if (! $school || ! $course || ! $exam) {
            return 'null';
        }

        return url("$school/$course/$exam");
    }
}

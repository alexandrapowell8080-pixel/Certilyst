<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    
    protected $fillable = [
        'subject_id','name','slug'
    ];

     protected $appends = ['exam_url'];

    public function subject():BelongsTo{
        return $this->belongsTo(Subject::class);
    }

    public function questions():HasMany
    {
        return $this->hasMany(Question::class,'exam_id');
    }

     public function getExamUrlAttribute()
    {
        $school = $this->subject->course->school->slug;
        $course = $this->subject->course->slug;
        $exam = $this->slug;

        if (! $school || ! $course || ! $exam) {
            return 'null';
        }

        return url("$school/$course/$exam");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Flashcard;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    protected $fillable = [
        'course_id','name','slug'
    ];
    public function exam():HasMany
    {
        return $this->hasMany(Exam::class,'subject_id');
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(course::class);
    }

    public function questions():HasMany{
        return $this->hasMany(Question::class,'exam_id');
    }

    // New relationship added safely below your existing code
    public function flashcards():HasMany
    {
        return $this->hasMany(Flashcard::class);
    }
}
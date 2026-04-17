<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Flashcard;

class Subject extends Model
{
    protected $fillable = [
        'course_id','name','slug'
    ];
    public function exam():HasMany
    {
        return $this->hasMany(Exam::class,'subject_id');
    }

    // New relationship added safely below your existing code
    public function flashcards():HasMany
    {
        return $this->hasMany(Flashcard::class);
    }
}
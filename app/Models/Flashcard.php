<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flashcard extends Model
{
    protected $fillable = [
        'subject_id',
        'question',
        'answer',
        'hint',
        'resource_url',
        'is_hard',
    ];

    protected $casts = [
        'is_hard' => 'boolean',
    ];

    /**
     * Get the subject that owns the flashcard.
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}

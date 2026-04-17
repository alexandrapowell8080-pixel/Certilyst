<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    public function exam():BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }
}

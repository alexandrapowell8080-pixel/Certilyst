<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    public function exam():HasMany
    {
        return $this->hasMany(Exam::class,'subject_id');
    }
}

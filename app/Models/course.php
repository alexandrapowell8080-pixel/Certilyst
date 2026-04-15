<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class course extends Model
{
    public function subject():HasMany
    {
        return $this->hasMany(Subject::class,'course_id');
    }
}

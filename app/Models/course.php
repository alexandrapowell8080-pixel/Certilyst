<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class course extends Model
{
    protected $fillable = [
        'school_id','name','slug'
    ];
    public function subject():HasMany
    {
        return $this->hasMany(Subject::class,'course_id');
    }

    public function school():BelongsTo
    {
        return $this->belongsTo(school::class);
    }

    

    
}

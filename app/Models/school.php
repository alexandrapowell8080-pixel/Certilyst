<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class school extends Model
{
    //
    protected $fillable = ['name', 'slug'];

    public function course():HasMany
    {
        return $this->hasMany(course::class,'school_id');
    }
}

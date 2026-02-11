<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    public function Driver()
    {
        return $this->belongsTo(User::class);
    }

    public function Trip()
    {
        return $this->hasMany(Trip::class);
    }
}

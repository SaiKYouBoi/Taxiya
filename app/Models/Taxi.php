<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    public function Driver()
    {
        return $this->hasOne(User::class);
    }
}

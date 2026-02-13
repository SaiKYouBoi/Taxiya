<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip;

class Taxi extends Model
{
    use HasFactory;

    protected $fillable = ['license_plate', 'model', 'vehicule_make', 'year_manufacture', 'taxi_number', 'user_id'];

    public function driver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}

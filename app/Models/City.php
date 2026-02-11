<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function departures()
    {
        return $this->hasMany(Trip::class, 'departure_city_id');
    }

    public function arrivals()
    {
        return $this->hasMany(Trip::class, 'arrival_city_id');
    }
}

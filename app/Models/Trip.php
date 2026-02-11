<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /** @use HasFactory<\Database\Factories\TripsFactory> */
    use HasFactory;

    protected $fillable = [
        'departure_city_id',
        'arrival_city_id',
        'taxi_id',
        'departure_datetime',
        'arrival_datetime',
        'base_price',
        'status',
        'available_seats',
    ];

    public function taxi()
    {
        return $this->belongsTo(Taxi::class);
    }

    public function departureCity()
    {
        return $this->belongsTo(City::class, 'departure_city_id');
    }

    public function arrivalCity()
    {
        return $this->belongsTo(City::class, 'arrival_city_id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
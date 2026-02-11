<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    /** @use HasFactory<\Database\Factories\SeatsFactory> */
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'seat_number',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function bookingSeats()
    {
        return $this->hasMany(BookingSeat::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip;
class Seat extends Model
{
    /** @use HasFactory<\Database\Factories\SeatsFactory> */
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'seat_number',
        'status',
    ];

    // Accessor for is_booked
    public function getIsBookedAttribute()
    {
        return $this->status === 'reserved';
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function bookingSeats()
    {
        return $this->hasMany(BookingSeat::class);
    }
}
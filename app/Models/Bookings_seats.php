<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings_seats extends Model
{
    /** @use HasFactory<\Database\Factories\BookingsSeatsFactory> */
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'seat_id',
        'final_price',
    ];

    public function booking()
    {
        return $this->belongsTo(Bookings::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seats::class);
    }
    
}

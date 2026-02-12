<?php

namespace App\Models;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSeat extends Model
{
    /** @use HasFactory<\Database\Factories\BookingsSeatsFactory> */
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'seat_id',
        'price',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

}

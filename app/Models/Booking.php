<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingsFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trip_id',
        'qr_code',
        'total_price',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function trips()
    {
        return $this->belongsTo(Trip::class);
    }

    public function reviews()
    {
        return $this->hasOne(Review::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function bookingSeats()
    {
        return $this->hasMany(Bookings_seats::class, 'booking_id');
    }

    public function seats()
    {
        return $this->belongsToMany(Seats::class, 'booking_seats', 'booking_id', 'seat_id')
                    ->withPivot('final_price')
                    ->withTimestamps();
    }

}

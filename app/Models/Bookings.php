<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
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
        return $this->belongsTo(users::class);
    }

    public function trips()
    {
        return $this->belongsTo(trips::class);
    }

    public function reviews()
    {
        return $this->hasOne(reviews::class);
    }

    public function payment()
    {
        return $this->hasOne(payments::class);
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

<?php

namespace App\Models;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = ['booking_id', 'amount', 'method', 'payment_date'];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}

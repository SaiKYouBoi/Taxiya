<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;
    public function booking()
{
    return $this->belongsTo(Booking::class);
}

public function driver()
{
    return $this->belongsTo(User::class);
}

}
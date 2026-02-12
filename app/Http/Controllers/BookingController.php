<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
     public function DriverBookings(){
     $driver = auth()->user()->load(['taxi.trips.bookings.traveler']);

     $trips = $driver->taxi ? $driver->taxi->trips : collect();

    return view('driver.bookings', compact('trips'));
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DriverController extends Controller
{ public function dashboard(){

    // $driver = auth()->user();
    $driver = User::whereHas('taxi')->first();
    $trips = $driver && $driver->taxi ?
    $driver->taxi->trips()
    ->with('bookings.traveler','departureCity', 'arrivalCity')
    ->orderBy('departure_datetime', 'desc')
    ->get()
     : collect();
    return view('driver.trip_managment', compact('trips'));
    }

}

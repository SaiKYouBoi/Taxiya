<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\User;
class DriverController extends Controller
{
    public function dashboard(){

    $driver = auth()->user();
    $trips = $driver && $driver->taxi ?
    $driver->taxi->trips()
    ->with('bookings.traveler','departureCity', 'arrivalCity')
    ->orderBy('departure_datetime', 'desc')
    ->get()
     : collect();

    return view('driver.trip_managment', compact('trips'));
    }

    public function cancel($tripId)
    {
        $driver = auth()->user();

        $trip = Trip::where('id', $tripId)
            ->whereHas('taxi', function ($query) use ($driver) {
                $query->where('user_id', $driver->id);
            })
            ->firstOrFail();

        $trip->update([
            'status' => 'cancelled'
        ]);

        return redirect()->back();
    }


}

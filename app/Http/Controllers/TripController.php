<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\City;
use App\Models\Taxi;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function create()
    {
        $cities = City::all();
        $taxis = Taxi::all();
        return view('trips.create', compact('cities', 'taxis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'departure_city_id' => 'required|exists:cities,id',
            'arrival_city_id' => 'required|exists:cities,id|different:departure_city_id',
            'taxi_id' => 'required|exists:taxis,id',
            'departure_datetime' => 'required|date|after:now',
            'base_price' => 'required|numeric|min:0',
        ]);

        $trip = Trip::create($validated);

        return redirect()->route('trips.show', $trip)->with('success', 'Trip created successfully!');
    }



}

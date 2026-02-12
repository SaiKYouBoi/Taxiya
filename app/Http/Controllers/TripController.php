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
        return view('driver.create_trip', compact('cities', 'taxis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'departure_city_id' => 'required|exists:cities,id',
            'arrival_city_id' => 'required|exists:cities,id|different:departure_city_id',
            'taxi_id' => 'required|exists:taxis,id',
            'departure_date' => 'required|date',
            'departure_time' => 'required',
            'arrival_date' => 'required|date',
            'arrival_time' => 'required',
            'base_price' => 'required|numeric|min:0',
            'recurring' => 'nullable|boolean',
        ]);

        $departure = $validated['departure_date'] . ' ' . $validated['departure_time'];
        $arrival = $validated['arrival_date'] . ' ' . $validated['arrival_time'];
        
        $departureTime = strtotime($departure);
        $arrivalTime = strtotime($arrival);
        $diffHours = ($arrivalTime - $departureTime) / 3600;
        
        if ($diffHours >= 24) {
            return redirect()->back()->withErrors(['arrival_date' => 'Arrival must be within 24 hours of departure'])->withInput();
        }
        
        if ($diffHours <= 0) {
            return redirect()->back()->withErrors(['arrival_date' => 'Arrival must be after departure'])->withInput();
        }

        $tripData = [
            'departure_city_id' => $validated['departure_city_id'],
            'arrival_city_id' => $validated['arrival_city_id'],
            'taxi_id' => $validated['taxi_id'],
            'departure_datetime' => $departure,
            'arrival_datetime' => $arrival,
            'base_price' => $validated['base_price'],
        ];

        if ($request->has('recurring')) {
            for ($i = 0; $i < 7; $i++) {
                $newDeparture = date('Y-m-d H:i:s', strtotime($departure . ' +' . $i . ' days'));
                $newArrival = date('Y-m-d H:i:s', strtotime($arrival . ' +' . $i . ' days'));
                
                Trip::create(array_merge($tripData, [
                    'departure_datetime' => $newDeparture,
                    'arrival_datetime' => $newArrival,
                ]));
            }
        } else {
            Trip::create($tripData);
        }

        return redirect()->back()->with('success', 'Trip(s) created successfully!');
    }
}

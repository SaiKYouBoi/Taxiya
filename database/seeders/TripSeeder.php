<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\City;
use App\Models\Taxi;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        $cities = City::all();
        $taxis = Taxi::all();
        
        $routes = [
            ['from' => 'Casablanca', 'to' => 'Marrakech', 'price' => 80, 'duration' => 3],
            ['from' => 'Casablanca', 'to' => 'Rabat', 'price' => 60, 'duration' => 1.5],
            ['from' => 'Marrakech', 'to' => 'Agadir', 'price' => 100, 'duration' => 3.5],
            ['from' => 'Rabat', 'to' => 'Fes', 'price' => 70, 'duration' => 2.5],
            ['from' => 'Tanger', 'to' => 'Rabat', 'price' => 90, 'duration' => 3],
            ['from' => 'Fes', 'to' => 'Marrakech', 'price' => 120, 'duration' => 5],
            ['from' => 'Agadir', 'to' => 'Casablanca', 'price' => 110, 'duration' => 4],
            ['from' => 'Casablanca', 'to' => 'Tanger', 'price' => 100, 'duration' => 4],
            ['from' => 'Rabat', 'to' => 'Marrakech', 'price' => 90, 'duration' => 3.5],
            ['from' => 'Fes', 'to' => 'Tanger', 'price' => 85, 'duration' => 3],
        ];

        foreach ($routes as $index => $route) {
            $departureCity = $cities->where('name', $route['from'])->first();
            $arrivalCity = $cities->where('name', $route['to'])->first();
            $taxi = $taxis[$index % $taxis->count()];
            
            $departureTime = Carbon::now()->addDays(rand(1, 7))->setHour(rand(6, 18))->setMinute(0);
            $arrivalTime = $departureTime->copy()->addHours($route['duration']);

            Trip::create([
                'departure_city_id' => $departureCity->id,
                'arrival_city_id' => $arrivalCity->id,
                'taxi_id' => $taxi->id,
                'departure_datetime' => $departureTime,
                'arrival_datetime' => $arrivalTime,
                'base_price' => $route['price'],
                'status' => 'waiting',
                'available_seats' => 6,
            ]);
        }
    }
}

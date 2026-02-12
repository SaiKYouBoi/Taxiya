<?php

namespace Database\Seeders;

use App\Models\Taxi;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaxiSeeder extends Seeder
{
    public function run(): void
    {
        $drivers = User::where('role', 'driver')->get();
        
        $taxiData = [
            ['license_plate' => '12345|A|44', 'model' => 'Mercedes 240D', 'vehicule_make' => 'Mercedes-Benz', 'year' => '1985'],
            ['license_plate' => '23456|B|20', 'model' => 'Peugeot 505', 'vehicule_make' => 'Peugeot', 'year' => '1990'],
            ['license_plate' => '34567|C|06', 'model' => 'Mercedes 300D', 'vehicule_make' => 'Mercedes-Benz', 'year' => '1988'],
            ['license_plate' => '45678|D|90', 'model' => 'Dacia Lodgy', 'vehicule_make' => 'Dacia', 'year' => '2018'],
            ['license_plate' => '56789|E|30', 'model' => 'Mercedes 240D', 'vehicule_make' => 'Mercedes-Benz', 'year' => '1987'],
        ];

        foreach ($drivers as $index => $driver) {
            Taxi::create([
                'license_plate' => $taxiData[$index]['license_plate'],
                'model' => $taxiData[$index]['model'],
                'vehicule_make' => $taxiData[$index]['vehicule_make'],
                'year_manufacture' => $taxiData[$index]['year'],
                'taxi_mumber' => rand(1000, 9999),
                'user_id' => $driver->id,
            ]);
        }
    }
}

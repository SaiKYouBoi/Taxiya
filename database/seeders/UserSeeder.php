<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 5 Drivers with Moroccan names
        $drivers = [
            ['name' => 'Ahmed Benali', 'email' => 'ahmed.benali@taxiya.ma', 'phone' => '+212661234567'],
            ['name' => 'Youssef El Amrani', 'email' => 'youssef.amrani@taxiya.ma', 'phone' => '+212662345678'],
            ['name' => 'Hassan Idrissi', 'email' => 'hassan.idrissi@taxiya.ma', 'phone' => '+212663456789'],
            ['name' => 'Karim Tazi', 'email' => 'karim.tazi@taxiya.ma', 'phone' => '+212664567890'],
            ['name' => 'Omar Benjelloun', 'email' => 'omar.benjelloun@taxiya.ma', 'phone' => '+212665678901'],
        ];

        foreach ($drivers as $driver) {
            User::create([
                'name' => $driver['name'],
                'email' => $driver['email'],
                'phone' => $driver['phone'],
                'password' => Hash::make('password'),
                'role' => 'driver',
                'email_verified_at' => now(),
                'total_trips' => rand(10, 50),
            ]);
        }

        // 10 Travelers
        $travelers = [
            ['name' => 'Fatima Zahra', 'email' => 'fatima.zahra@gmail.com', 'phone' => '+212671234567'],
            ['name' => 'Mohammed Alami', 'email' => 'mohammed.alami@gmail.com', 'phone' => '+212672345678'],
            ['name' => 'Amina Bennani', 'email' => 'amina.bennani@gmail.com', 'phone' => '+212673456789'],
            ['name' => 'Rachid Chakir', 'email' => 'rachid.chakir@gmail.com', 'phone' => '+212674567890'],
            ['name' => 'Salma Fassi', 'email' => 'salma.fassi@gmail.com', 'phone' => '+212675678901'],
            ['name' => 'Mehdi Lahlou', 'email' => 'mehdi.lahlou@gmail.com', 'phone' => '+212676789012'],
            ['name' => 'Nadia Berrada', 'email' => 'nadia.berrada@gmail.com', 'phone' => '+212677890123'],
            ['name' => 'Samir Kettani', 'email' => 'samir.kettani@gmail.com', 'phone' => '+212678901234'],
            ['name' => 'Leila Chraibi', 'email' => 'leila.chraibi@gmail.com', 'phone' => '+212679012345'],
            ['name' => 'Tarik Bensouda', 'email' => 'tarik.bensouda@gmail.com', 'phone' => '+212680123456'],
        ];

        foreach ($travelers as $traveler) {
            User::create([
                'name' => $traveler['name'],
                'email' => $traveler['email'],
                'phone' => $traveler['phone'],
                'password' => Hash::make('password'),
                'role' => 'traveler',
                'total_trips' => rand(0, 20),
            ]);
        }
    }
}

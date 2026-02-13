# Modifications pour confirm_booking.blade.php

## Ligne 13: Ville de départ
Remplacer: <h1 class="text-2xl font-bold leading-tight">Casablanca</h1>
Par: <h1 class="text-2xl font-bold leading-tight">{{ $trip->departureCity->name }}</h1>

## Ligne 17: Ville d'arrivée  
Remplacer: <h1 class="text-2xl font-bold leading-tight">Marrakech</h1>
Par: <h1 class="text-2xl font-bold leading-tight">{{ $trip->arrivalCity->name }}</h1>

## Ligne 23: Heure de départ
Remplacer: <p class="text-lg font-bold">08:00 AM</p>
Par: <p class="text-lg font-bold">{{ $trip->departure_datetime->format('H:i') }}</p>

## Ligne 31: Heure d'arrivée
Remplacer: <p class="text-lg font-bold">11:30 AM</p>
Par: <p class="text-lg font-bold">{{ $trip->arrival_datetime->format('H:i') }}</p>

## Ligne 52: Nom du chauffeur
Remplacer: <p class="font-bold">Ahmed Benali</p>
Par: <p class="font-bold">{{ $trip->taxi->driver->name }}</p>

## Ligne 64: Modèle du véhicule
Remplacer: <span class="font-medium">Mercedes 240D</span>
Par: <span class="font-medium">{{ $trip->taxi->model }}</span>

## Ligne 213: Prix de base
Remplacer: <span>60 MAD</span>
Par: <span>{{ $trip->base_price }} MAD</span>

## Ligne 215: Frais premium
Remplacer: <span>12 MAD</span>
Par: <span>{{ $trip->base_price * 0.2 }} MAD</span>

## Ligne 220: Prix total
Remplacer: <p class="text-3xl font-bold text-slate-900 dark:text-white">77
Par: <p class="text-3xl font-bold text-slate-900 dark:text-white">{{ $trip->base_price * 1.2 + 5 }}

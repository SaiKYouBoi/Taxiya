@extends('layouts.main')
@section('content')

<main class="flex-1 flex flex-col h-full relative overflow-y-auto">
    <header class="md:hidden bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 p-4 flex justify-between items-center sticky top-0 z-10">
        <div class="flex items-center gap-2 text-primary">
            <span class="material-icons-round text-2xl">local_taxi</span>
            <span class="text-xl font-bold text-gray-900 dark:text-white">TaxiYa</span>
        </div>
    </header>

    <div class="flex-1 w-full max-w-5xl mx-auto p-4 md:p-8 lg:p-12">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded-r-lg">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 shadow-sm rounded-r-lg">
                        {{ session('error') }}
                    </div>
                @endif
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Bookings</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-1">Manage your upcoming trips and view your travel history.</p>
            </div>
            <button class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium shadow-md shadow-primary/20 transition-all flex items-center justify-center gap-2">
                <span class="material-icons-round text-xl">add</span>
                Book a Ride
            </button>
        </div>

       <div class="flex border-b border-gray-200 dark:border-gray-700 mb-8 overflow-x-auto">
    <a href="{{ route('mybookings.index', ['status' => 'upcoming']) }}"
       class="px-6 py-3 border-b-2 {{ request('status') == 'upcoming' || !request('status') ? 'border-primary text-primary' : 'border-transparent text-gray-500' }} font-medium text-sm whitespace-nowrap">
        Upcoming Trips
    </a>

    <a href="{{ route('mybookings.index', ['status' => 'completed']) }}"
       class="px-6 py-3 border-b-2 {{ request('status') == 'completed' ? 'border-primary text-primary' : 'border-transparent text-gray-500' }} font-medium text-sm whitespace-nowrap">
        Past Trips (Completed)
    </a>

    <a href="{{ route('mybookings.index', ['status' => 'cancelled']) }}"
       class="px-6 py-3 border-b-2 {{ request('status') == 'cancelled' ? 'border-primary text-primary' : 'border-transparent text-gray-500' }} font-medium text-sm whitespace-nowrap">
        Cancelled
    </a>
</div>

        <div class="space-y-4">
            @forelse($bookings as $booking)
                <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col lg:flex-row gap-6">

                    <div class="flex-1 flex flex-col justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold
                                    @if($booking->status == 'confirmed') bg-green-100 text-green-700 @elseif($booking->status == 'pending') bg-orange-100 text-orange-700 @else bg-gray-100 text-gray-700 @endif">
                                    {{ ucfirst($booking->status) }}
                                </span>
                                <span class="text-xs text-gray-500 font-medium tracking-wide uppercase">Ref: #BK-{{ $booking->id }}</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white flex flex-wrap items-center gap-2">
                                {{ $booking->trip->departureCity->name ?? 'Departure' }}
                                <span class="text-gray-400 mx-1 material-icons-round text-xl">arrow_forward</span>
                                {{ $booking->trip->arrivalCity->name ?? 'Arrival' }}
                            </h3>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">calendar_today</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Date & Time</span>
                                    <span class="font-medium">{{ \Carbon\Carbon::parse($booking->trip->date_time)->format('M d, Y • h:i A') }}</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">event_seat</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Seats</span>
                                    <span class="font-medium">{{ $booking->seats_count }} Seats Reserved</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-72 lg:border-l lg:border-gray-100 lg:dark:border-gray-700 lg:pl-6 flex flex-col justify-between gap-6">
                        <div>
                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-3">Your Driver</h4>
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                    <span class="material-icons-round">person</span>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 dark:text-white">{{ optional($booking->trip->driver)->name ?? 'Unknown' }}</p>
                                    <div class="flex items-center text-xs text-yellow-500">
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="font-medium ml-1 text-gray-600 dark:text-gray-300">4.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            @php
                                $departureTime = \Carbon\Carbon::parse($booking->trip->date_time);
                                $canCancel = now()->diffInHours($departureTime, false) >= 24;
                            @endphp

                            @if($booking->status !== 'cancelled')
                                @if($canCancel)
                                    <form action="{{ route('mybookings.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?')">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="w-full bg-white dark:bg-transparent border border-red-200 text-red-500 hover:bg-red-50 px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center justify-center gap-2">
                                            <span class="material-icons-round text-sm">cancel</span>
                                            Cancel Booking
                                        </button>
                                    </form>
                                @else
                                    <div class="flex items-center gap-2 p-2 bg-orange-50 border border-orange-200 rounded-lg">
                                        <span class="material-icons-round text-orange-500 text-sm">info</span>
                                        <span class="text-orange-600 text-xs font-medium">Non annulable (-24h)</span>
                                    </div>
                                @endif
                            @else
                                <div class="flex items-center gap-2 p-2 bg-gray-100 rounded-lg">
                                    <span class="material-icons-round text-gray-400 text-sm">block</span>
                                    <span class="text-gray-500 italic text-sm font-medium">Réservation annulée</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-12 bg-surface-light dark:bg-surface-dark rounded-xl border border-dashed border-gray-300">
                    <span class="material-icons-round text-5xl text-gray-300 mb-4">directions_car</span>
                    <p class="text-gray-500">Vous n'avez pas encore de réservations.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8 rounded-xl bg-gradient-to-r from-primary to-blue-600 p-8 text-white relative overflow-hidden shadow-lg">
            <div class="relative z-10 max-w-lg">
                <h3 class="text-2xl font-bold mb-2">Where to next?</h3>
                <p class="mb-6 opacity-90">Explore popular routes across Morocco with our premium fleet.</p>
                <button class="bg-white text-primary hover:bg-gray-50 px-5 py-2 rounded-lg font-bold text-sm shadow transition-colors">Explore Routes</button>
            </div>
            <div class="absolute top-0 right-0 h-full w-1/2 opacity-20 transform translate-x-1/4 skew-x-12 bg-white pointer-events-none"></div>
        </div>
    </div>
</main>

@endsection

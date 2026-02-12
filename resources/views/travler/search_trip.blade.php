@extends('layouts.main')

@section('content')
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full bg-moroccan-pattern bg-fixed">
        <div class="flex flex-col lg:flex-row gap-8">
            <aside class="w-full lg:w-[320px] shrink-0 space-y-6">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6 sticky top-28">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">Your Trip</h2>
                        <button class="text-sm text-brand-teal hover:underline">Reset</button>
                    </div>
                    {{-- Route will be added in the next step, for now use empty action or current URL --}}
                <form action="" method="GET" class="space-y-4">

                    {{-- 1. Departure City --}}
                    <div class="relative group">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Leaving from</label>
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-brand-teal text-xl">trip_origin</span>
                            {{-- Changed input to select for database ID matching --}}
                            <select name="departure_city_id" class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium appearance-none">
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ request('departure_city_id') == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('departure_city_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pl-5 -my-2 h-6 flex items-center">
                        <div class="w-0.5 h-full border-l-2 border-dotted border-slate-300 dark:border-slate-600"></div>
                    </div>

                    {{-- 2. Arrival City --}}
                    <div class="relative group">
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Going to</label>
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-brand-orange text-xl">location_on</span>
                            <select name="arrival_city_id" class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium appearance-none">
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ request('arrival_city_id') == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('arrival_city_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <hr class="border-slate-100 dark:border-slate-800 my-4" />

                    {{-- 3. Date --}}
                    <div>
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Date</label>
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">calendar_today</span>
                            <input name="date"
                                value="{{ request('date') }}"
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium"
                                type="date" />
                        </div>
                        @error('date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- 4. Passengers --}}
                    <div>
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Passengers</label>
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                            <input name="seats"
                                value="{{ request('seats', 1) }}"
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium"
                                type="number" />
                        </div>
                        @error('seats')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Price Range (MAD)</label>
                        <div class="flex items-center gap-2">
                            {{-- Min Price --}}
                            <div class="relative w-1/2">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs">min</span>
                                <input
                                    name="min_price"
                                    value="{{ request('min_price') }}"
                                    type="number"
                                    min="0"
                                    placeholder="0"
                                    class="w-full pl-8 pr-2 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium placeholder-slate-400 text-sm"
                                />
                            </div>

                            {{-- Max Price --}}
                            <div class="relative w-1/2">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs">max</span>
                                <input
                                    name="max_price"
                                    value="{{ request('max_price') }}"
                                    type="number"
                                    min="0"
                                    placeholder="Any"
                                    class="w-full pl-9 pr-2 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium placeholder-slate-400 text-sm"
                                />
                            </div>
                        </div>
                        {{-- Display Validation Errors for Price --}}
                        @error('min_price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        @error('max_price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mt-4">
                        <label class="inline-flex items-center cursor-pointer group">
                            <div class="relative">
                                <input type="checkbox" name="premium_only" value="1" {{ request('premium_only') ? 'checked' : '' }} class="sr-only peer">
                                <div class="w-10 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-teal/20 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-brand-teal"></div>
                            </div>
                            <span class="ml-3 text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-brand-teal transition-colors">
                                Premium Seats Only <span class="text-xs text-amber-500">(Front Seats)</span>
                            </span>
                        </label>
                    </div>
                    <button class="w-full mt-6 bg-brand-teal hover:bg-brand-dark-teal text-white font-bold py-3.5 rounded-lg shadow-lg shadow-teal-500/20 transition-all active:scale-[0.98]" type="submit">
                        Update Search
                    </button>
                </form>
                </div>
            </aside>
        <section class="flex-grow space-y-6">

    {{-- Header: Trip Stats --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
        <div>
            {{-- We use 'optional' here so it doesn't crash if variable isn't set yet --}}
            <h1 class="text-xl font-bold text-slate-900 dark:text-white">
                 Search Results
            </h1>
            <p class="text-slate-500 text-sm">
                {{ request('date') }} • {{ request('seats', 1) }} Passenger(s) •
                <span class="text-brand-teal font-medium">{{ $trips->count() }} rides available</span>
            </p>
        </div>
    </div>

    {{-- Loop Start --}}
    @forelse($trips as $trip)
        <div class="group relative bg-white dark:bg-slate-900 rounded-xl p-5 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-brand-teal/30 transition-all duration-300">

            <div class="flex flex-col md:flex-row gap-6">
                {{-- Time & Route --}}
                <div class="flex-grow md:w-1/3 flex flex-col justify-center">
                    <div class="flex items-center gap-4">
                        <div class="flex flex-col items-center gap-1">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">
                                {{ \Carbon\Carbon::parse($trip->departure_datetime)->format('H:i') }}
                            </span>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                            <div class="w-0.5 h-8 bg-slate-200 dark:bg-slate-700"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                            <span class="text-lg font-bold text-slate-400">
                                {{ \Carbon\Carbon::parse($trip->arrival_datetime)->format('H:i') }}
                            </span>
                        </div>
                        <div class="flex flex-col gap-9 text-sm text-slate-500 dark:text-slate-400">
                            {{-- Relationships: departureCity and arrivalCity --}}
                            <span class="font-medium">{{ $trip->departureCity->name }}</span>
                            <span class="font-medium">{{ $trip->arrivalCity->name }}</span>
                        </div>
                    </div>
                </div>

                {{-- Driver Info --}}
                <div class="md:w-1/3 border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="relative">
                            <img alt="Driver" class="w-12 h-12 rounded-full object-cover border border-slate-200 dark:border-slate-700"
                                src="https://ui-avatars.com/api/?name={{ $trip->taxi->Driver->name ?? 'D' }}&background=0D8ABC&color=fff" />
                        </div>
                        <div>
                            {{-- Accessing User through Taxi --}}
                            <h4 class="font-bold text-slate-900 dark:text-white">{{ $trip->taxi->Driver->name ?? 'Driver' }}</h4>
                            <div class="flex items-center text-xs text-slate-500">
                                <span class="material-icons text-brand-orange text-[14px] mr-1">star</span>
                                <span class="font-bold text-slate-800 dark:text-slate-200 mr-1">4.9</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/50 p-2 rounded-lg w-fit">
                        <span class="material-icons text-base">directions_car</span>
                        <span>{{ $trip->taxi->vehicule_make ?? 'Taxi' }}</span>
                    </div>
                </div>

                {{-- Price & Book Button --}}
                <div class="md:w-1/4 flex flex-col justify-between items-end border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6">
                    <div class="text-right">
                        <div class="text-3xl font-bold text-brand-teal">{{ $trip->base_price }} <span class="text-base font-normal text-slate-500">MAD</span></div>
                        <div class="text-xs text-slate-400">per seat</div>
                    </div>
                    <div class="flex flex-col items-end gap-2 w-full mt-4 md:mt-0">
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            {{ $trip->available_seats }} seats left
                        </span>
                        <a href="{{ route('trips.show', $trip->id) }}
                            class="w-full bg-brand-teal hover:bg-brand-dark-teal text-white font-bold py-2.5 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="text-center py-10">
            <p class="text-slate-500">No trips found matching your criteria.</p>
        </div>
    @endforelse

</section>
        </div>
    </main>
@endsection

@extends('layouts.main')

@section('content')
    <main class="flex-1 w-full">
        <section class="relative min-h-[600px] lg:h-[85vh] flex items-center hero-pattern text-white">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
            <div class="container mx-auto px-6 lg:px-12 relative z-10 w-full">
                <div class="max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-600/30 border border-blue-400/30 backdrop-blur-sm mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-xs font-semibold tracking-wide text-blue-100 uppercase">Now live in 12 major
                            cities</span>
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6 tracking-tight drop-shadow-md">
                        Reliable Grand Taxi Bookings <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white drop-shadow-sm">Across
                            Morocco.</span>
                    </h1>
                    <p class="text-lg text-slate-100 mb-10 max-w-xl leading-relaxed drop-shadow-sm font-medium">
                        Experience the comfort of inter-city travel with fixed pricing, guaranteed seats, and professional
                        drivers. The modern way to travel traditionally.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('trip.search') }}"
                            class="bg-primary hover:bg-primary-dark text-white text-lg font-semibold px-8 py-4 rounded-xl shadow-lg shadow-blue-600/30 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2">
                                Find a Ride
                                <span class="material-icons">arrow_forward</span>
                            </a>
                        <a href="{{ route('register') }}"
                        <button
                            class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 text-lg font-medium px-8 py-4 rounded-xl transition-all flex items-center justify-center gap-2 shadow-lg shadow-black/10">
                            <span class="material-icons">drive_eta</span>
                            Become a Driver
                        </button>
                        </a>
                    </div>
                    <div class="mt-12 flex items-center gap-6 text-sm text-slate-200 font-medium">
                        <div class="flex items-center gap-2 drop-shadow-md">
                            <span class="material-icons text-green-400 text-base">check_circle</span>
                            <span>No haggling</span>
                        </div>
                        <div class="flex items-center gap-2 drop-shadow-md">
                            <span class="material-icons text-green-400 text-base">check_circle</span>
                            <span>Safe rides</span>
                        </div>
                        <div class="flex items-center gap-2 drop-shadow-md">
                            <span class="material-icons text-green-400 text-base">check_circle</span>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="hidden lg:block absolute right-12 bottom-12 lg:top-1/2 lg:-translate-y-1/2 lg:bottom-auto w-96 bg-white dark:bg-[#15202b] rounded-2xl shadow-2xl overflow-hidden border border-gray-100 dark:border-gray-800 p-6 z-20">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Quick Estimation</h3>
                <div class="space-y-4">
                    <div class="relative">
                        <span class="material-icons absolute left-3 top-3.5 text-gray-400">my_location</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-slate-800 border-none rounded-xl text-slate-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-primary"
                            placeholder="Pickup City" type="text" />
                    </div>
                    <div class="relative">
                        <span class="material-icons absolute left-3 top-3.5 text-primary">location_on</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-slate-800 border-none rounded-xl text-slate-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-primary"
                            placeholder="Destination" type="text" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-3.5 text-gray-400 text-sm">calendar_today</span>
                            <input
                                class="w-full pl-9 pr-2 py-3 bg-gray-50 dark:bg-slate-800 border-none rounded-xl text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary"
                                placeholder="Today" type="text" />
                        </div>
                        <div class="relative">
                            <span class="material-icons absolute left-3 top-3.5 text-gray-400 text-sm">person</span>
                            <input
                                class="w-full pl-9 pr-2 py-3 bg-gray-50 dark:bg-slate-800 border-none rounded-xl text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-primary"
                                placeholder="1 Passenger" type="text" />
                        </div>
                    </div>
                    <button
                        class="w-full bg-slate-900 dark:bg-primary text-white font-bold py-3.5 rounded-xl hover:opacity-90 transition-opacity mt-2">
                        Check Prices
                    </button>
                </div>
            </div>
        </section>
        <section class="py-20 bg-white dark:bg-[#101922] relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
                <div
                    class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-blue-50 dark:bg-blue-900/10 blur-3xl">
                </div>
                <div
                    class="absolute top-[30%] -right-[10%] w-[40%] h-[40%] rounded-full bg-indigo-50 dark:bg-indigo-900/10 blur-3xl">
                </div>
            </div>
            <div class="container mx-auto px-6 lg:px-12 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">Why Travel with TaxiYa?
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg">We've reimagined the Grand Taxi experience to make
                        your inter-city journeys smoother, safer, and more predictable.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="group p-8 rounded-3xl bg-slate-50 dark:bg-[#15202b] border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-primary text-3xl">airline_seat_recline_extra</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Guaranteed Seats</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Book your specific seat in advance. No more squeezing in or waiting for the taxi to fill up
                            before departure.
                        </p>
                    </div>
                    <div
                        class="group p-8 rounded-3xl bg-slate-50 dark:bg-[#15202b] border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-primary text-3xl">payments</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Fixed Pricing</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Know exactly what you'll pay before you book. Transparent rates per seat with zero hidden
                            surcharges or negotiation.
                        </p>
                    </div>
                    <div
                        class="group p-8 rounded-3xl bg-slate-50 dark:bg-[#15202b] border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:shadow-blue-500/5 hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-primary text-3xl">verified_user</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Verified Drivers</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Every driver is vetted, licensed, and rated by passengers like you. Safety and professionalism
                            are our top priorities.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
            <div
                class="absolute inset-0 z-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1557313066-b258673f8a65?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80')] bg-cover bg-center">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-slate-900/40 z-0"></div>
            <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to hit the road?</h2>
                <p class="text-slate-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">Join thousands of travelers exploring
                    Morocco the smart way. Download the app or book online today.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button
                        class="bg-primary hover:bg-primary-dark text-white font-bold py-4 px-10 rounded-full shadow-lg shadow-blue-500/30 transition-all text-lg">
                        Book Your First Ride
                    </button>
                    <button
                        class="bg-transparent border border-slate-600 hover:bg-white/10 text-white font-semibold py-4 px-10 rounded-full transition-all text-lg">
                        Driver Registration
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection

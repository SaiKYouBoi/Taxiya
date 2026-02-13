@extends('layouts.main')
@section('content')
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Traveler Bookings Portal - TaxiYa</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet" />
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <!-- Theme Configuration -->
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#137fec",
                            "primary-dark": "#0f65bc",
                            "primary-light": "#e7f2fd",
                            "background-light": "#f6f7f8",
                            "background-dark": "#101922",
                            "surface-light": "#ffffff",
                            "surface-dark": "#1a2632",
                        },
                        fontFamily: {
                            "display": ["Space Grotesk", "sans-serif"]
                        },
                        borderRadius: {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "2xl": "1rem",
                            "full": "9999px"
                        },
                    },
                },
            }
        </script>
        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
        </style>
    </head>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-full relative overflow-y-auto">
        <!-- Mobile Header (Visible only on small screens) -->
        <header
            class="md:hidden bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 p-4 flex justify-between items-center sticky top-0 z-10">
            <div class="flex items-center gap-2 text-primary">
                <span class="material-icons-round text-2xl">local_taxi</span>
                <span class="text-xl font-bold text-gray-900 dark:text-white">TaxiYa</span>
            </div>
            <button class="text-gray-500 dark:text-gray-400">
                <span class="material-icons-round text-3xl">menu</span>
            </button>
        </header>
        <div class="flex-1 w-full max-w-5xl mx-auto p-4 md:p-8 lg:p-12">
            <!-- Page Header & Actions -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Bookings</h1>
                    <p class="text-gray-500 dark:text-gray-400 mt-1">Manage your upcoming trips and view your travel
                        history.</p>
                </div>
                <button
                    class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium shadow-md shadow-primary/20 transition-all flex items-center justify-center gap-2">
                    <span class="material-icons-round text-xl">add</span>
                    Book a Ride
                </button>
            </div>
            <!-- Tabs -->
            <div class="flex border-b border-gray-200 dark:border-gray-700 mb-8">
                <button
                    class="px-6 py-3 border-b-2 border-primary text-primary font-medium text-sm flex items-center gap-2">
                    <span class="material-icons-round text-lg">upcoming</span>
                    Upcoming Trips
                </button>

            </div>
            <!-- Upcoming Trips List -->
            <div class="space-y-4">
                <!-- Card 1: Confirmed -->
                <div
                    class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col lg:flex-row gap-6">
                    <!-- Left: Route & Date -->
                    <div class="flex-1 flex flex-col justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <span
                                    class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                    Confirmed
                                </span>
                                <span class="text-xs text-gray-500 font-medium tracking-wide uppercase">Ref: #BK-7829</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white flex flex-wrap items-center gap-2">
                                Casablanca
                                <span class="text-gray-400 mx-1 material-icons-round text-xl">arrow_forward</span>
                                Marrakech
                            </h3>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">calendar_today</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Date &amp; Time</span>
                                    <span class="font-medium">Oct 24, 2023 • 10:00 AM</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">event_seat</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Seat Selection</span>
                                    <span class="font-medium">Seat 3 - Rear Right</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Driver & Action -->
                    <div
                        class="lg:w-72 lg:border-l lg:border-gray-100 lg:dark:border-gray-700 lg:pl-6 flex flex-col justify-between gap-6">
                        <!-- Driver Info -->
                        <div>
                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-3">Your Driver</h4>
                            <div class="flex items-center gap-3">
                                <img alt="Driver Ahmed"
                                    class="h-10 w-10 rounded-full object-cover ring-2 ring-gray-100 dark:ring-gray-700"
                                    data-alt="Professional driver portrait in suit"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5Xf7BrbQPnef9CUVrJw2FS2ympbLyxABX5lmanaC-uQi_69k90nfnmdf8mbJVS-b0UvFkaqhUN3UkKSIhDa9-pYZyJFEOYcvuYQM3BXH7Q-xkf3T7SC8YWmNVuOlNYfl_uQ4AcYtxUZyC8rYLO5jpeU6cFcPGvCaGuM8Y2YQIcbWwSivN0SXoVEqFNRWA6RrqyKigewTKJj2bYrvx8Xf7G2Z5K_-fpXIKMiwzTP1qhnnaJ13Fi17L_QtE4qTIxWFNfDUjUnV_rg" />
                                <div>
                                    <p class="font-bold text-gray-900 dark:text-white">Ahmed K.</p>
                                    <div class="flex items-center text-xs text-yellow-500">
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="font-medium ml-1 text-gray-600 dark:text-gray-300">4.8</span>
                                        <span class="text-gray-400 mx-1">•</span>
                                        <span class="text-gray-500 dark:text-gray-400">Mercedes E-Class</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Actions -->
                        <div class="flex flex-col sm:flex-row lg:flex-col gap-2">
                            <button
                                class="flex-1 bg-white dark:bg-transparent border border-gray-300 dark:border-gray-600 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 dark:hover:border-red-800 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Cancel Booking
                            </button>
                            <button
                                class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Pending -->
                <div
                    class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col lg:flex-row gap-6">
                    <!-- Left: Route & Date -->
                    <div class="flex-1 flex flex-col justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <span
                                    class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400 border border-orange-200 dark:border-orange-800">
                                    Pending Confirmation
                                </span>
                                <span class="text-xs text-gray-500 font-medium tracking-wide uppercase">Ref: #BK-7892</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white flex flex-wrap items-center gap-2">
                                Rabat
                                <span class="text-gray-400 mx-1 material-icons-round text-xl">arrow_forward</span>
                                Tangier
                            </h3>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">calendar_today</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Date &amp; Time</span>
                                    <span class="font-medium">Nov 01, 2023 • 08:30 AM</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-icons-round text-lg">event_seat</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs text-gray-500 uppercase font-semibold">Seat Selection</span>
                                    <span class="font-medium">Seat 1 - Front Left</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Driver & Action -->
                    <div
                        class="lg:w-72 lg:border-l lg:border-gray-100 lg:dark:border-gray-700 lg:pl-6 flex flex-col justify-between gap-6">
                        <!-- Driver Info -->
                        <div>
                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-3">Your Driver</h4>
                            <div class="flex items-center gap-3">
                                <img alt="Driver Sarah"
                                    class="h-10 w-10 rounded-full object-cover ring-2 ring-gray-100 dark:ring-gray-700"
                                    data-alt="Professional smiling woman driver portrait"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCY-SRr0YCEcjnhf9SPhEWktA7Gbo7jrXMqbCX4Eqhyo12DTEhelCacnf1lXfaN1wLJPGvigMaTbCtgtUBneh5FR7UiYz6OTiUa_pJ7z_JfmvsWPEjBxcD6xM3vS3hO9mVA6ayOW4ciwQYorXgzK3RTg_UntPUsWxiPAZjlDHSBCa0Ntd-ltao7p6bYJImtNLXh5apaCWmzdu2DFf37Cf2OCddDeKr2q2WC0MAfU_cY4qWyTn4VXAtLre2RtKRgnU8gKUv7RbhDMA" />
                                <div>
                                    <p class="font-bold text-gray-900 dark:text-white">Sarah M.</p>
                                    <div class="flex items-center text-xs text-yellow-500">
                                        <span class="material-icons-round text-sm">star</span>
                                        <span class="font-medium ml-1 text-gray-600 dark:text-gray-300">4.9</span>
                                        <span class="text-gray-400 mx-1">•</span>
                                        <span class="text-gray-500 dark:text-gray-400">Hyundai Van</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Actions -->
                        <div class="flex flex-col sm:flex-row lg:flex-col gap-2">
                            <button
                                class="flex-1 bg-white dark:bg-transparent border border-gray-300 dark:border-gray-600 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 dark:hover:border-red-800 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Cancel Request
                            </button>
                            <button
                                class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Modify Trip
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Past Trips Title -->
           
            <!-- Map Promo Card (Visual Interest) -->
            <div
                class="mt-8 rounded-xl bg-gradient-to-r from-primary to-blue-600 p-8 text-white relative overflow-hidden shadow-lg">
                <div class="relative z-10 max-w-lg">
                    <h3 class="text-2xl font-bold mb-2">Where to next?</h3>
                    <p class="mb-6 opacity-90">Explore popular routes across Morocco with our premium fleet. Reliable,
                        safe, and comfortable.</p>
                    <button
                        class="bg-white text-primary hover:bg-gray-50 px-5 py-2 rounded-lg font-bold text-sm shadow transition-colors">
                        Explore Routes
                    </button>
                </div>
                <!-- Abstract Background Pattern -->
                <div
                    class="absolute top-0 right-0 h-full w-1/2 opacity-20 transform translate-x-1/4 skew-x-12 bg-white pointer-events-none">
                </div>
            </div>
        </div>
    </main>
    </div>
@endsection

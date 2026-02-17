<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TaxiYa - Create New Trip</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
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
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-100 antialiased min-h-screen flex transition-colors duration-200">
    <header
        class="lg:hidden fixed top-0 w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700 z-20 px-4 py-3 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div
                class="h-8 w-8 bg-primary rounded-lg flex items-center justify-center text-white relative overflow-hidden shadow-sm">
                <span class="material-symbols-outlined text-lg relative z-10">local_taxi</span>
                <div class="absolute inset-0 bg-white/20 transform skew-x-12 -translate-x-3"></div>
            </div>
            <span class="font-bold text-lg dark:text-white">TaxiYa</span>
        </div>
        <button class="text-gray-600 dark:text-gray-300">
            <span class="material-icons-outlined">menu</span>
        </button>
    </header>
    <main class="flex-1 lg:ml-64 p-4 lg:p-8 pt-20 lg:pt-8 min-h-screen flex flex-col gap-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-1">
                    <span>Dashboard</span>
                    <span class="material-icons-outlined text-base mx-1">chevron_right</span>
                    <span>My Trips</span>
                    <span class="material-icons-outlined text-base mx-1">chevron_right</span>
                    <span class="text-primary font-medium">Create New Trip</span>
                </nav>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Create New Trip</h1>
            </div>
            <a href="{{ route('driver.trip_managment') }}">
            <button
                class="flex items-center justify-center gap-2 bg-surface-light border border-gray-200 hover:bg-gray-50 text-gray-700 px-5 py-3 rounded-xl shadow-sm transition-all font-medium dark:bg-surface-dark dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
                <span class="material-icons-outlined">arrow_back</span>
                Cancel
            </button>
            </a>
        </div>
        <div class="max-w-3xl mx-auto w-full">
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-900 to-primary p-6 md:p-8 text-white relative overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-overlay"
                        data-alt="Abstract road texture"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbrlU_7zJouVYIj2UzUqsRMtYH3aFmtjBlHr_6pM3BXtpLM4L1vVBaL6JZEsritLYLyrB8VTWH2_JPHYV2sDDnqgrQIV6-AWskFzeftMgCjromjYoKjeuaP-ZWs1P-scauk0IeqIB2klP7no5VJ7hvNJO977vRc5RBZ-lqRI1F1XQpoov1xhfz84S6haPLyoWY1NPEqjb-fFMrmwRLKeshGmJU3rnDtVDnkHTCms6L1oNvQ0ueLazyQVgjB6DFfQQfRd3jXhQaNQ" />
                    <div class="relative z-10">
                        <h2 class="text-2xl font-bold mb-2">Trip Details</h2>
                        <p class="text-blue-100">Fill in the information below to schedule your next trip. Accurate
                            information helps travelers find you faster.</p>
                    </div>
                </div>
                <div class="p-6 md:p-8 space-y-8">
                    <form method="POST" action="{{ route('trips.store') }}">
                        @csrf
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-icons-outlined text-primary">map</span>
                            Route Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                            <div
                                class="hidden md:block absolute top-[2.75rem] left-[50%] -translate-x-1/2 w-8 h-[2px] border-t-2 border-dashed border-gray-300 dark:border-gray-600 z-0">
                            </div>
                            <div class="relative z-10 group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="departure_city_id">Departure City</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">trip_origin</span>
                                    </div>
                                    <select name="departure_city_id" id="departure_city_id" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm">
                                        <option value="">Select City</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="relative z-10 group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="arrival_city_id">Arrival City</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">location_on</span>
                                    </div>
                                    <select name="arrival_city_id" id="arrival_city_id" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm">
                                        <option value="">Select City</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-gray-100 dark:border-gray-700" />
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white my-6 flex items-center gap-2">
                            <span class="material-icons-outlined text-primary">schedule</span>
                            Date &amp; Time
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="departure_date">Departure Date</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">calendar_today</span>
                                    </div>
                                    <input name="departure_date" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="departure_date" type="date" />
                                    @error('departure_date')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="departure_time">Departure Time</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">access_time</span>
                                    </div>
                                    <input name="departure_time" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="departure_time" type="time" />
                                </div>
                            </div>
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="arrival_date">Arrival Date</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">calendar_today</span>
                                    </div>
                                    <input name="arrival_date" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="arrival_date" type="date" />
                                    @error('arrival_date')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="arrival_time">Arrival Time</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">access_time</span>
                                    </div>
                                    <input name="arrival_time" required
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="arrival_time" type="time" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 border border-blue-100 dark:border-blue-800">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="bg-white dark:bg-blue-900 p-2 rounded-md text-primary">
                                        <span class="material-icons-outlined">update</span>
                                    </div>
                                    <div>
                                        <label class="text-sm font-bold text-gray-900 dark:text-white block cursor-pointer" for="recurring-toggle">Make this a recurring trip</label>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Repeat this trip every day for a week</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input class="sr-only peer" name="recurring" id="recurring-toggle" type="checkbox" value="1" />
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="border-gray-100 dark:border-gray-700" />
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2 my-6">
                            <span class="material-icons-outlined text-primary">payments</span>
                            Pricing
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="base_price">Base Price per Seat</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 font-bold">MAD</span>
                                    </div>
                                    <input name="base_price" required
                                        class="block w-full pl-12 pr-12 py-3 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary text-lg font-semibold transition-shadow shadow-sm"
                                        id="base_price" placeholder="0.00" step="0.01" type="number" />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-400 text-sm">/ seat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="taxi_id" value="{{ auth()->user()->taxi->id }}">
                </div>
                <div
                    class="px-6 py-4 bg-gray-50 dark:bg-gray-800/50 border-t border-gray-200 dark:border-gray-700 flex flex-col-reverse sm:flex-row sm:justify-end gap-3 rounded-b-xl">
                    <button type="submit"
                        class="px-8 py-3 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg shadow-lg shadow-blue-500/20 active:scale-95 transition-all flex items-center justify-center gap-2">
                        <span>Publish Trip</span>
                        <span class="material-icons-outlined text-lg">arrow_forward</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>

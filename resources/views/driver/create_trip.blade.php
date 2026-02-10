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
    <aside
        class="w-64 bg-surface-light dark:bg-surface-dark border-r border-gray-200 dark:border-gray-700 flex flex-col fixed h-full z-10 transition-colors duration-200 hidden lg:flex">
        <div class="p-6 flex items-center gap-3">
            <div class="h-10 w-10 bg-primary rounded-lg flex items-center justify-center text-white relative shadow-sm overflow-hidden">
                <span class="material-symbols-outlined text-2xl relative z-10">local_taxi</span>
                <div class="absolute inset-0 bg-white/20 transform skew-x-12 -translate-x-4"></div>
            </div>
            <span class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TaxiYa</span>
        </div>
        <div class="px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <div class="flex items-center gap-3 mb-4">
                <img class="w-12 h-12 rounded-full object-cover border-2 border-primary/20"
                    data-alt="Portrait of taxi driver Ahmed Benali"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR_lIfA0UFJtZ_7oieMr-YRXIJ35Bkp-fvFvHcWOegNX-6xKz0JOJ_2jvnBumgM_WhOfPVhUoIIdXUniMRjl14Xyx9NYJXkQOMKADoEhk24RodWsnUW_LG_AENK948YdVaBAs4qgEV7wikE46oe44zQvk9InA3yHrd4wQfofYGrs9u1zrS4iIu6XFtN6L9cV7hLNtcE5w96qYcIgYVwUb8WOQprknOl5bMZBPqRWcDyi17UJyPkYyBZqsBlcAUg-VchwLcXY32pQ" />
                <div>
                    <h3 class="font-bold text-sm text-gray-900 dark:text-white">Ahmed Benali</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Mercedes 240 (Grand Taxi)</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="bg-background-light dark:bg-background-dark p-3 rounded-lg text-center">
                    <div class="flex justify-center text-yellow-500 mb-1">
                        <span class="material-icons-outlined text-lg">star</span>
                    </div>
                    <span class="block text-lg font-bold">4.8</span>
                    <span class="text-[10px] uppercase tracking-wider text-gray-500">Rating</span>
                </div>
                <div class="bg-background-light dark:bg-background-dark p-3 rounded-lg text-center">
                    <div class="flex justify-center text-green-500 mb-1">
                        <span class="material-icons-outlined text-lg">payments</span>
                    </div>
                    <span class="block text-lg font-bold">3.4k</span>
                    <span class="text-[10px] uppercase tracking-wider text-gray-500">MAD Earned</span>
                </div>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 py-6 space-y-1">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group"
                href="#">
                <span class="material-icons-outlined group-hover:text-primary transition-colors">dashboard</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:text-primary dark:bg-primary/20 font-medium"
                href="#">
                <span class="material-icons-outlined">alt_route</span>
                <span>My Trips</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group"
                href="#">
                <span class="material-icons-outlined group-hover:text-primary transition-colors">history</span>
                <span class="font-medium">History</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group"
                href="#">
                <span
                    class="material-icons-outlined group-hover:text-primary transition-colors">account_balance_wallet</span>
                <span class="font-medium">Earnings</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group"
                href="#">
                <span class="material-icons-outlined group-hover:text-primary transition-colors">settings</span>
                <span class="font-medium">Settings</span>
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors"
                href="#">
                <span class="material-icons-outlined">logout</span>
                <span class="font-medium">Log Out</span>
            </a>
        </div>
    </aside>
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
            <button
                class="flex items-center justify-center gap-2 bg-surface-light border border-gray-200 hover:bg-gray-50 text-gray-700 px-5 py-3 rounded-xl shadow-sm transition-all font-medium dark:bg-surface-dark dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
                <span class="material-icons-outlined">arrow_back</span>
                Cancel
            </button>
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
                                    for="departure">Departure City</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">trip_origin</span>
                                    </div>
                                    <input
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="departure" placeholder="e.g. Casablanca" type="text" />
                                </div>
                            </div>
                            <div class="relative z-10 group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="arrival">Arrival City</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">location_on</span>
                                    </div>
                                    <input
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="arrival" placeholder="e.g. Rabat" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-gray-100 dark:border-gray-700" />
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-icons-outlined text-primary">schedule</span>
                            Date &amp; Time
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="date">Date</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">calendar_today</span>
                                    </div>
                                    <input
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="date" type="date" />
                                </div>
                            </div>
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="time">Departure Time</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons-outlined text-gray-400 group-focus-within:text-primary transition-colors">access_time</span>
                                    </div>
                                    <input
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-shadow shadow-sm"
                                        id="time" type="time" />
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-6 bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 border border-blue-100 dark:border-blue-800">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="bg-white dark:bg-blue-900 p-2 rounded-md text-primary">
                                        <span class="material-icons-outlined">update</span>
                                    </div>
                                    <div>
                                        <label
                                            class="text-sm font-bold text-gray-900 dark:text-white block cursor-pointer"
                                            for="recurring-toggle">Make this a recurring trip</label>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Repeat this trip on
                                            selected days</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input class="sr-only peer" id="recurring-toggle" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>
                            <div class="mt-4 pt-4 border-t border-blue-100 dark:border-blue-800/50 hidden peer-checked:block"
                                id="days-selector">
                                <span
                                    class="block text-xs font-semibold uppercase text-gray-500 dark:text-gray-400 mb-3 tracking-wider">Select
                                    Days</span>
                                <div class="flex flex-wrap gap-2">
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Mon</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Tue</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Wed</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Thu</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Fri</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Sat</span>
                                    </label>
                                    <label class="cursor-pointer">
                                        <input class="peer sr-only" name="days" type="checkbox" />
                                        <span
                                            class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-medium hover:border-primary peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition-all dark:bg-surface-dark dark:border-gray-600 dark:text-gray-300">Sun</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-gray-100 dark:border-gray-700" />
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-icons-outlined text-primary">payments</span>
                            Pricing &amp; Seats
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="group">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5"
                                    for="price">Base Price per Seat</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 font-bold">MAD</span>
                                    </div>
                                    <input
                                        class="block w-full pl-12 pr-12 py-3 border border-gray-300 dark:border-gray-600 rounded-lg leading-5 bg-white dark:bg-background-dark text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary text-lg font-semibold transition-shadow shadow-sm"
                                        id="price" placeholder="0.00" type="number" />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-400 text-sm">/ seat</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-yellow-50 dark:bg-yellow-900/10 border border-yellow-100 dark:border-yellow-900/30 rounded-lg p-4 flex gap-3">
                                <div class="shrink-0 text-yellow-600 dark:text-yellow-500 mt-0.5">
                                    <span class="material-icons-outlined">info</span>
                                </div>
                                <div class="text-sm text-yellow-800 dark:text-yellow-200/80">
                                    <span class="font-bold block mb-1 text-yellow-900 dark:text-yellow-100">Pricing
                                        Note:</span>
                                    Front seats (1 &amp; 2) will automatically include a 20% premium for travelers
                                    booking them specifically.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="px-6 py-4 bg-gray-50 dark:bg-gray-800/50 border-t border-gray-200 dark:border-gray-700 flex flex-col-reverse sm:flex-row sm:justify-end gap-3 rounded-b-xl">
                    <button
                        class="px-6 py-3 rounded-lg text-gray-600 dark:text-gray-300 font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Save as Draft
                    </button>
                    <button
                        class="px-8 py-3 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg shadow-lg shadow-blue-500/20 active:scale-95 transition-all flex items-center justify-center gap-2">
                        <span>Publish Trip</span>
                        <span class="material-icons-outlined text-lg">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

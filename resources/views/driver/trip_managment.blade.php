<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TaxiYa - Driver Trip Management</title>
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Tailwind Config -->
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
                    backgroundImage: {
                        'moroccan-pattern': "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e3a8a' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                        'header-gradient': "linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.6))",
                        'header-gradient-dark': "linear-gradient(to right, rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.6))",
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-100 antialiased min-h-screen flex transition-colors duration-200">
    <!-- Sidebar -->
    <aside
        class="w-64 bg-surface-light dark:bg-surface-dark border-r border-gray-200 dark:border-gray-700 flex flex-col fixed h-full z-10 transition-colors duration-200 lg:flex">
        <!-- Logo Area -->
        <div class="p-6 flex items-center gap-3">
            <div class="h-10 w-10 bg-primary rounded-lg flex items-center justify-center text-white relative shadow-sm overflow-hidden">
                <span class="material-symbols-outlined text-2xl relative z-10">local_taxi</span>
                <div class="absolute inset-0 bg-white/20 transform skew-x-12 -translate-x-4"></div>
            </div>
            <span class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TaxiYa</span>
        </div>
        <!-- Driver Profile Summary -->
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
            <!-- Quick Stats -->
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
        <!-- Navigation -->
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
        <!-- Logout -->
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors"
                href="#">
                <span class="material-icons-outlined">logout</span>
                <span class="font-medium">Log Out</span>
            </a>
        </div>
    </aside>
    <!-- Mobile Header (Visible only on small screens) -->
    <header
        class="lg:hidden fixed top-0 w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700 z-20 px-4 py-3 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="h-8 w-8 bg-primary rounded-lg flex items-center justify-center text-white font-bold">T</div>
            <span class="font-bold text-lg dark:text-white">TaxiYa</span>
        </div>
        <button class="text-gray-600 dark:text-gray-300">
            <span class="material-icons-outlined">menu</span>
        </button>
    </header>
    <!-- Main Content Area -->
    <main class="flex-1 lg:ml-64 p-4 lg:p-8 pt-20 lg:pt-8 min-h-screen flex flex-col gap-6">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-1">
                    <span>Dashboard</span>
                    <span class="material-icons-outlined text-base mx-1">chevron_right</span>
                    <span class="text-primary font-medium">My Upcoming Trips</span>
                </nav>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Trip Management</h1>
            </div>
            <button
                class="flex items-center justify-center gap-2 bg-primary hover:bg-blue-600 text-white px-5 py-3 rounded-xl shadow-lg shadow-blue-500/20 transition-all active:scale-95 font-medium">
                <span class="material-icons-outlined">add_circle</span>
                Create New Trip
            </button>
        </div>
        <!-- Filter & Search Bar -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
            <!-- Search -->
            <div
                class="md:col-span-8 bg-surface-light dark:bg-surface-dark p-1.5 rounded-xl border border-gray-200 dark:border-gray-700 flex items-center shadow-sm">
                <span class="material-icons-outlined text-gray-400 ml-3">search</span>
                <input
                    class="w-full border-none bg-transparent focus:ring-0 text-gray-700 dark:text-gray-200 placeholder-gray-400"
                    placeholder="Search route, city, or date..." type="text" />
            </div>
            <!-- Date Filter -->
            <div class="md:col-span-2 relative">
                <button
                    class="w-full h-full bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-2 text-left flex items-center justify-between text-gray-700 dark:text-gray-200 hover:border-primary transition-colors">
                    <span class="text-sm font-medium">This Week</span>
                    <span class="material-icons-outlined text-gray-400">calendar_today</span>
                </button>
            </div>
            <!-- Status Filter -->
            <div class="md:col-span-2 relative">
                <button
                    class="w-full h-full bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded-xl px-4 py-2 text-left flex items-center justify-between text-gray-700 dark:text-gray-200 hover:border-primary transition-colors">
                    <span class="text-sm font-medium">All Status</span>
                    <span class="material-icons-outlined text-gray-400">filter_list</span>
                </button>
            </div>
        </div>
        <!-- Trips List -->
        <div class="flex flex-col gap-4">
            <!-- Trip Card 1 (Active/Today) -->
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl p-5 border-l-4 border-primary shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                <div class="absolute right-0 top-0 p-4 opacity-10 md:opacity-100 md:relative md:p-0">
                    <!-- Background decoration for visual interest -->
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <!-- Time & Date -->
                    <div class="flex flex-row md:flex-col items-center md:items-start gap-3 md:gap-1 min-w-[120px]">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">14:30</div>
                        <div
                            class="text-sm font-medium text-primary uppercase tracking-wide bg-primary/10 px-2 py-0.5 rounded">
                            Today</div>
                    </div>
                    <!-- Route Visualization -->
                    <div class="flex-1 flex flex-col gap-2">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                <div
                                    class="w-0.5 h-8 bg-gray-200 dark:bg-gray-700 border-l border-dashed border-gray-300 dark:border-gray-600">
                                </div>
                                <div class="w-3 h-3 rounded-full bg-primary ring-4 ring-primary/20"></div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between h-[60px] py-1">
                                <div>
                                    <span class="text-xs text-gray-400 block mb-0.5">Start</span>
                                    <h3 class="font-bold text-gray-700 dark:text-gray-200">Casablanca <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Gare Voyageurs)</span></h3>
                                </div>
                                <div>
                                    <span class="text-xs text-gray-400 block mb-0.5">Destination</span>
                                    <h3 class="font-bold text-gray-900 dark:text-white">Rabat <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Agdal)</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Occupancy Status -->
                    <div
                        class="min-w-[180px] bg-background-light dark:bg-background-dark p-4 rounded-lg border border-gray-100 dark:border-gray-800">
                        <div class="flex justify-between items-end mb-2">
                            <span
                                class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Occupancy</span>
                            <span class="text-lg font-bold text-primary">6<span
                                    class="text-gray-400 text-sm">/6</span></span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="mt-2 text-xs text-green-600 font-medium flex items-center gap-1">
                            <span class="material-icons-outlined text-sm">check_circle</span>
                            Full Capacity
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 md:border-l md:pl-6 border-gray-200 dark:border-gray-700">
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Edit">
                            <span class="material-icons-outlined">edit</span>
                        </button>
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Duplicate">
                            <span class="material-icons-outlined">content_copy</span>
                        </button>
                        <button
                            class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg shadow-md shadow-primary/20 hover:bg-blue-600 transition-colors">
                            Start Trip
                        </button>
                    </div>
                </div>
            </div>
            <!-- Trip Card 2 (Upcoming) -->
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl p-5 border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <!-- Time & Date -->
                    <div class="flex flex-row md:flex-col items-center md:items-start gap-3 md:gap-1 min-w-[120px]">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">09:00</div>
                        <div
                            class="text-sm font-medium text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-2 py-0.5 rounded">
                            Tomorrow</div>
                    </div>
                    <!-- Route Visualization -->
                    <div class="flex-1 flex flex-col gap-2">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                <div
                                    class="w-0.5 h-8 bg-gray-200 dark:bg-gray-700 border-l border-dashed border-gray-300 dark:border-gray-600">
                                </div>
                                <div class="w-3 h-3 rounded-full border-2 border-primary"></div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between h-[60px] py-1">
                                <div>
                                    <h3 class="font-bold text-gray-700 dark:text-gray-200">Rabat <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Agdal)</span></h3>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 dark:text-white">Kenitra <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Center)</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Occupancy Status -->
                    <div
                        class="min-w-[180px] bg-background-light dark:bg-background-dark p-4 rounded-lg border border-gray-100 dark:border-gray-800">
                        <div class="flex justify-between items-end mb-2">
                            <span
                                class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Occupancy</span>
                            <span class="text-lg font-bold text-gray-900 dark:text-white">2<span
                                    class="text-gray-400 text-sm">/6</span></span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-yellow-500 h-full rounded-full" style="width: 33%"></div>
                        </div>
                        <div class="mt-2 text-xs text-yellow-600 font-medium flex items-center gap-1">
                            <span class="material-icons-outlined text-sm">info</span>
                            Filling Up
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 md:border-l md:pl-6 border-gray-200 dark:border-gray-700">
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Edit">
                            <span class="material-icons-outlined">edit</span>
                        </button>
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Duplicate">
                            <span class="material-icons-outlined">content_copy</span>
                        </button>
                        <button
                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors"
                            title="Cancel">
                            <span class="material-icons-outlined">delete</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Trip Card 3 (Future) -->
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl p-5 border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow group opacity-80 hover:opacity-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <!-- Time & Date -->
                    <div class="flex flex-row md:flex-col items-center md:items-start gap-3 md:gap-1 min-w-[120px]">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">08:00</div>
                        <div
                            class="text-sm font-medium text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-2 py-0.5 rounded">
                            Nov 12</div>
                    </div>
                    <!-- Route Visualization -->
                    <div class="flex-1 flex flex-col gap-2">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                                <div
                                    class="w-0.5 h-8 bg-gray-200 dark:bg-gray-700 border-l border-dashed border-gray-300 dark:border-gray-600">
                                </div>
                                <div class="w-3 h-3 rounded-full border-2 border-gray-400"></div>
                            </div>
                            <div class="flex-1 flex flex-col justify-between h-[60px] py-1">
                                <div>
                                    <h3 class="font-bold text-gray-700 dark:text-gray-200">Kenitra <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Center)</span></h3>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 dark:text-white">Tanger <span
                                            class="text-gray-400 font-normal text-sm ml-1">(Bus Station)</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Occupancy Status -->
                    <div
                        class="min-w-[180px] bg-background-light dark:bg-background-dark p-4 rounded-lg border border-gray-100 dark:border-gray-800">
                        <div class="flex justify-between items-end mb-2">
                            <span
                                class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Occupancy</span>
                            <span class="text-lg font-bold text-gray-900 dark:text-white">0<span
                                    class="text-gray-400 text-sm">/6</span></span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-gray-400 h-full rounded-full" style="width: 2%"></div>
                        </div>
                        <div class="mt-2 text-xs text-gray-400 font-medium flex items-center gap-1">
                            <span class="material-icons-outlined text-sm">schedule</span>
                            Scheduled
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 md:border-l md:pl-6 border-gray-200 dark:border-gray-700">
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Edit">
                            <span class="material-icons-outlined">edit</span>
                        </button>
                        <button
                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                            title="Duplicate">
                            <span class="material-icons-outlined">content_copy</span>
                        </button>
                        <button
                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors"
                            title="Cancel">
                            <span class="material-icons-outlined">delete</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recurring Schedule Promo / Empty State Helper -->
        <div
            class="mt-4 bg-gradient-to-r from-blue-900 to-primary rounded-xl p-6 md:p-8 text-white relative overflow-hidden">
            <img class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-overlay"
                data-alt="Abstract road blur suggesting travel and speed"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbrlU_7zJouVYIj2UzUqsRMtYH3aFmtjBlHr_6pM3BXtpLM4L1vVBaL6JZEsritLYLyrB8VTWH2_JPHYV2sDDnqgrQIV6-AWskFzeftMgCjromjYoKjeuaP-ZWs1P-scauk0IeqIB2klP7no5VJ7hvNJO977vRc5RBZ-lqRI1F1XQpoov1xhfz84S6haPLyoWY1NPEqjb-fFMrmwRLKeshGmJU3rnDtVDnkHTCms6L1oNvQ0ueLazyQVgjB6DFfQQfRd3jXhQaNQ" />
            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-bold mb-2">Drive Regularly?</h3>
                    <p class="text-blue-100 max-w-lg">Set up a recurring schedule to automatically create trips for
                        your daily routes. Save time and get booked faster.</p>
                </div>
                <button
                    class="bg-white text-primary px-6 py-3 rounded-lg font-bold shadow-lg hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <span class="material-icons-outlined">update</span>
                    Set Recurring Schedule
                </button>
            </div>
        </div>
    </main>
</body>

</html>

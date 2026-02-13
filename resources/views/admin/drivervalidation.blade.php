<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TaxiYa - Simplified Driver Validation List</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
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
                        "primary-50": "#f0f7ff",
                        "primary-100": "#e0effe",
                        "primary-200": "#bae0fd",
                        "primary-300": "#7cc5fb",
                        "primary-400": "#36a9f8",
                        "primary-500": "#137fec",
                        "primary-600": "#0062c8",
                        "primary-700": "#004e9f",
                        "primary-800": "#004284",
                        "primary-900": "#06386b",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
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
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-display min-h-screen flex overflow-hidden">
    <aside
        class="w-72 bg-white dark:bg-[#15202b] border-r border-primary-100 dark:border-primary-900 flex-shrink-0 hidden lg:flex flex-col h-screen sticky top-0">
        <div class="h-20 flex items-center px-8 border-b border-primary-50 dark:border-primary-900/50">
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                    <span class="material-icons-round text-2xl">local_taxi</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">TaxiYa</h1>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Admin Portal</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
            <p class="px-4 text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Main Menu</p>
            <a class="flex items-center px-4 py-3 bg-primary/10 text-primary rounded-xl transition-all duration-200 group"
                href="#">
                <span class="material-icons-round text-xl mr-3">verified_user</span>
                <span class="font-medium">Driver Validations</span>
                
            </a>
            <a class="flex items-center px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-primary-900/20 hover:text-primary rounded-xl transition-colors duration-200 group"
                href="#">
                <span class="material-icons-round text-xl mr-3 group-hover:text-primary transition-colors">people</span>
                <span class="font-medium">Verified Drivers</span>
            </a>
            <a class="flex items-center px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-primary-900/20 hover:text-primary rounded-xl transition-colors duration-200 group"
                href="#">
                <span
                    class="material-icons-round text-xl mr-3 group-hover:text-primary transition-colors">alt_route</span>
                <span class="font-medium">Route Management</span>
            </a>
            <a class="flex items-center px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-primary-900/20 hover:text-primary rounded-xl transition-colors duration-200 group"
                href="#">
                <span
                    class="material-icons-round text-xl mr-3 group-hover:text-primary transition-colors">bar_chart</span>
                <span class="font-medium">System Stats</span>
            </a>
            <div class="pt-6 mt-6 border-t border-slate-100 dark:border-primary-900/30">
                <p class="px-4 text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Settings</p>
                <a class="flex items-center px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-primary-900/20 hover:text-primary rounded-xl transition-colors duration-200 group"
                    href="#">
                    <span
                        class="material-icons-round text-xl mr-3 group-hover:text-primary transition-colors">settings</span>
                    <span class="font-medium">Platform Config</span>
                </a>
            </div>
        </nav>
        <div class="p-4 border-t border-primary-50 dark:border-primary-900/50">
            <div
                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-primary-900/20 border border-slate-100 dark:border-primary-900/50">
                <img alt="Admin User Profile Picture"
                    class="w-10 h-10 rounded-lg object-cover ring-2 ring-white dark:ring-primary-900"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHerNfiME92GyKaPM6HUGe_FCSIhYgnyRL024UOfuLbnBnkrYrSHb6B2UPSux71pCm0a2CJQQRL9ma1eU2VzenIx00LwuFq5np_ktI_OLak544EyDF9m0Q3iTOz8oRHFiSUEH3N7rUvM7VvLTtYponKi_kjcQNzm9Zg0O3VP4vyMuo44zBDak8INQX8sHwbljtvbf1rpzxtgZzSrowL3Kmeo-DqWm4PcqVuhiXxYlDJCiu1yrcOAkffIxNQFxdhQhYDj2L-7wXSg" />
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold text-slate-900 dark:text-white truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-500 truncate">Admin</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-slate-400 hover:text-primary transition-colors" type="submit">
                        <span class="material-icons-round">logout</span>
                    </button>
                </form>
            </div>
        </div>
    </aside>
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative bg-slate-50/50 dark:bg-[#0b1219]">
        <header
            class="h-20 bg-white dark:bg-[#15202b] border-b border-primary-100 dark:border-primary-900 flex items-center justify-between px-8 z-10 sticky top-0">
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 text-slate-500 hover:bg-slate-100 rounded-lg">
                    <span class="material-icons-round">menu</span>
                </button>
                <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Validation Queue</h2>
            </div>
            <div class="flex items-center gap-6">
                <div class="relative hidden md:block w-96">
                    <span
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 material-icons-round text-lg">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-primary-900/20 border border-slate-200 dark:border-primary-800 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-slate-700 dark:text-slate-200 placeholder-slate-400"
                        placeholder="Search by name, license plate, or ID..." type="text" />
                </div>
                <button
                    class="relative p-2 text-slate-500 hover:text-primary hover:bg-primary-50 dark:hover:bg-primary-900/30 rounded-lg transition-colors">
                    <span class="material-icons-round">notifications_none</span>
                    <span
                        class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-[#15202b]"></span>
                </button>
            </div>
        </header>
        <div class="flex-1 overflow-y-auto p-8 scroll-smooth">
            <div
                class="bg-white dark:bg-[#15202b] border border-slate-100 dark:border-primary-900 rounded-xl shadow-sm overflow-hidden flex flex-col">
                <div
                    class="px-6 py-4 border-b border-slate-100 dark:border-primary-900/50 flex items-center justify-between">
                    <h3 class="font-bold text-lg text-slate-800 dark:text-white">Pending Requests</h3>
                    <div class="flex gap-2">
                        <button
                            class="flex items-center gap-2 px-3 py-2 bg-white dark:bg-[#15202b] border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-primary-900/20 rounded-lg text-slate-600 dark:text-slate-300 transition-colors text-sm font-medium">
                            <span class="material-icons-round text-base">filter_list</span>
                            Filter
                        </button>
                        <button
                            class="flex items-center gap-2 px-3 py-2 bg-white dark:bg-[#15202b] border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-primary-900/20 rounded-lg text-slate-600 dark:text-slate-300 transition-colors text-sm font-medium">
                            <span class="material-icons-round text-base">sort</span>
                            Sort
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-slate-50/50 dark:bg-primary-900/10 border-b border-slate-100 dark:border-primary-900/50">
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider w-1/4">
                                    Driver Name</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider w-1/6">
                                    License &amp; Vehicle</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider w-1/6">
                                    Submission Date</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right w-1/4">
                                    Quick Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-primary-900/30">
                            @if ($drivers->isEmpty())
                                <p class="text-center py-6 text-slate-500">
                                    No pending drivers.
                                </p>
                            @endif
                            @foreach ($drivers as $driver)
                                <tr class="group hover:bg-slate-50 dark:hover:bg-primary-900/10 transition-colors">
                                    <td class="px-6 py-5 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img alt="Ahmed Benali Portrait"
                                                    class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-primary-900"
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6luD8KjG6t-wu1obmEsDqgZ0x4MfIb9EWMEArI1jj0Jz2qdDqvw-pk0JPY86FQ6pMB7VBvRJRKPg7E1QjQrdicNcHC596BDRcG2VXHVjB0OYd8gtTNh4ZMVM9mc5cqIoUVfejJBz8bCz4tAlyjpISOUyxudC3yU2_X6u4Oc-f5mIVcZL1424Y7J0vlx8Yoqbf5kALi09tHYEFyTgk1v_tB8xFQBrpIzPmq9l8YYw32iSZDLIt7XA9uM8dlZVkO8YUd5Vibblk_Q" />
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-base font-bold text-slate-900 dark:text-white">
                                                    {{ $driver->name }}
                                                </div>
                                                <div class="text-sm text-slate-500">{{ 'TX-' . $driver->taxi->taxi_number }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 whitespace-nowrap">
                                        <div class="flex flex-col gap-1">
                                            <span
                                                class="px-2.5 py-1 w-fit rounded-md bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs font-mono font-medium text-slate-600 dark:text-slate-300">
                                                {{ optional($driver->taxi)->license_plate ?? 'N/A' }}
                                            </span>
                                            <span
                                                class="text-sm text-slate-600 dark:text-slate-400 font-medium">{{ optional($driver->taxi)->vehicule_make }}
                                                {{ optional($driver->taxi)->model }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 whitespace-nowrap">
                                        <div class="text-sm text-slate-900 dark:text-white font-medium">
                                            {{ $driver->created_at->format('M d, Y') }}</div>
                                        <div class="text-xs text-slate-500">{{ $driver->created_at->format('H:i A') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 whitespace-nowrap text-right">
                                        <div class="flex items-center justify-end gap-3">
                                            <form method="POST" action="{{ route('drivers.reject', $driver->id) }}">
                                                @csrf
                                                <button
                                                class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg transition-colors text-sm font-semibold shadow-sm">
                                                <span class="material-icons-round text-lg">close</span>
                                                Reject
                                            </button>
                                            </form>
                                            <form method="POST" action="{{ route('drivers.approve', $driver->id) }}">
                                                @csrf
                                                <button
                                                class="flex items-center gap-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors text-sm font-semibold shadow-md shadow-emerald-500/20">
                                                <span class="material-icons-round text-lg">check</span>
                                                Approve
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr class="group hover:bg-slate-50 dark:hover:bg-primary-900/10 transition-colors">
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <img alt="Youssef Tazi Portrait"
                                                class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-primary-900"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGZi8yb_wZLAiM_ajuYN5stW2sYb2wNr6IMK_VaC5DtNKXBViBhSUHzN471cVLyFtRaXnPfyEFZKIj8RqLCQNm2ZabAQDEpyRGIeRt4Qb0AbCPCIy-rvu_tmVCEBFJh2JLRBMoKfMr__f0pZhiNC26rEC4puDl7WJ5a3OL3KSbp6sIXEDotlUUpai6qvfrOwBNVZPHC0MdVzugD4i8yYyz8xjD1Omo9OL0zlA8DnOBegQsFyBpkNXJ6YoM42fde1RyWFUPFgZk4w" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base font-bold text-slate-900 dark:text-white">Youssef
                                                Tazi</div>
                                            <div class="text-sm text-slate-500">ID: #TX-9823</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="px-2.5 py-1 w-fit rounded-md bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs font-mono font-medium text-slate-600 dark:text-slate-300">
                                            8842-B-12
                                        </span>
                                        <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">Dacia
                                            Lodgy</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="text-sm text-slate-900 dark:text-white font-medium">Oct 12, 2023</div>
                                    <div class="text-xs text-slate-500">09:15 AM</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg transition-colors text-sm font-semibold shadow-sm">
                                            <span class="material-icons-round text-lg">close</span>
                                            Reject
                                        </button>
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors text-sm font-semibold shadow-md shadow-emerald-500/20">
                                            <span class="material-icons-round text-lg">check</span>
                                            Approve
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-primary-900/10 transition-colors">
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <img alt="Omar Idrissi Portrait"
                                                class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-primary-900"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_3GQTSLHg8aJ2lGaCDu_EiO-0di797jYIkA3ij2KDhyiBFgppFZxVptZO-cSVYp7NHsyzew6yLvjcQIF8lJZ2BgFDFyw6sM3H6d9Ilq2bdA-KHgJmS0j6ehRt2D8eFdTk_ol0H936q-enDizuqTNbmtg2jrMICJul_xfmjAzw9SHB8fu93dknZtWHxw8S1klNTnKFEwvE7AY1YgfFGZbDLQLzEkGVu64GKi6FBIeJPuyjbFNrKZ_rjmP-m-pS-k51DQCs72XChQ" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base font-bold text-slate-900 dark:text-white">Omar
                                                Idrissi</div>
                                            <div class="text-sm text-slate-500">ID: #TX-9824</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="px-2.5 py-1 w-fit rounded-md bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs font-mono font-medium text-slate-600 dark:text-slate-300">
                                            5621-A-06
                                        </span>
                                        <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">Mercedes
                                            240</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="text-sm text-slate-900 dark:text-white font-medium">Oct 11, 2023</div>
                                    <div class="text-xs text-slate-500">16:20 PM</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg transition-colors text-sm font-semibold shadow-sm">
                                            <span class="material-icons-round text-lg">close</span>
                                            Reject
                                        </button>
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors text-sm font-semibold shadow-md shadow-emerald-500/20">
                                            <span class="material-icons-round text-lg">check</span>
                                            Approve
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-primary-900/10 transition-colors">
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-12 w-12 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center text-primary dark:text-primary-300 text-lg font-bold ring-2 ring-white dark:ring-primary-900">
                                            KB
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base font-bold text-slate-900 dark:text-white">Karim
                                                Bouzidi</div>
                                            <div class="text-sm text-slate-500">ID: #TX-9825</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="px-2.5 py-1 w-fit rounded-md bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs font-mono font-medium text-slate-600 dark:text-slate-300">
                                            3321-B-44
                                        </span>
                                        <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">Peugeot
                                            Partner</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="text-sm text-slate-900 dark:text-white font-medium">Oct 11, 2023</div>
                                    <div class="text-xs text-slate-500">14:10 PM</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg transition-colors text-sm font-semibold shadow-sm">
                                            <span class="material-icons-round text-lg">close</span>
                                            Reject
                                        </button>
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors text-sm font-semibold shadow-md shadow-emerald-500/20">
                                            <span class="material-icons-round text-lg">check</span>
                                            Approve
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-primary-900/10 transition-colors">
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-12 w-12 bg-purple-100 dark:bg-purple-900/40 rounded-full flex items-center justify-center text-purple-600 dark:text-purple-300 text-lg font-bold ring-2 ring-white dark:ring-primary-900">
                                            MS
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base font-bold text-slate-900 dark:text-white">Mehdi Saidi
                                            </div>
                                            <div class="text-sm text-slate-500">ID: #TX-9826</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span
                                            class="px-2.5 py-1 w-fit rounded-md bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs font-mono font-medium text-slate-600 dark:text-slate-300">
                                            9981-A-15
                                        </span>
                                        <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">Dacia
                                            Logan</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="text-sm text-slate-900 dark:text-white font-medium">Oct 10, 2023</div>
                                    <div class="text-xs text-slate-500">08:55 AM</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg transition-colors text-sm font-semibold shadow-sm">
                                            <span class="material-icons-round text-lg">close</span>
                                            Reject
                                        </button>
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg transition-colors text-sm font-semibold shadow-md shadow-emerald-500/20">
                                            <span class="material-icons-round text-lg">check</span>
                                            Approve
                                        </button>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-6 py-4 border-t border-slate-100 dark:border-primary-900/50 flex items-center justify-between mt-auto bg-slate-50/50 dark:bg-[#15202b]">
                    <span class="text-sm text-slate-500">Showing <span
                            class="font-bold text-slate-800 dark:text-white">1-5</span> of <span
                            class="font-bold text-slate-800 dark:text-white">12</span> pending requests</span>
                    <div class="flex gap-2">
                        <button
                            class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-400 cursor-not-allowed">
                            <span class="material-icons-round text-sm">chevron_left</span>
                        </button>
                        <button
                            class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-600 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="material-icons-round text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <p class="text-xs text-slate-400 flex items-center gap-2">
                    <span class="material-icons-round text-base">info</span>
                    Approved drivers will be automatically notified via SMS.
                </p>
            </div>
        </div>
    </main>

</body>

</html>

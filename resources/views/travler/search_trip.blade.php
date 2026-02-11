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
                    <form class="space-y-4">
                        <div class="relative group">
                            <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Leaving
                                from</label>
                            <div class="relative">
                                <span
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-brand-teal text-xl">trip_origin</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium placeholder-slate-400"
                                    placeholder="City" type="text" value="Casablanca" />
                            </div>
                        </div>
                        <div class="pl-5 -my-2 h-6 flex items-center">
                            <div class="w-0.5 h-full border-l-2 border-dotted border-slate-300 dark:border-slate-600"></div>
                        </div>
                        <div class="relative group">
                            <label class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Going
                                to</label>
                            <div class="relative">
                                <span
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-brand-orange text-xl">location_on</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium placeholder-slate-400"
                                    placeholder="City" type="text" value="Rabat" />
                            </div>
                        </div>
                        <hr class="border-slate-100 dark:border-slate-800 my-4" />
                        <div>
                            <label
                                class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Date</label>
                            <div class="relative">
                                <span
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">calendar_today</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium"
                                    type="date" value="2023-10-24" />
                            </div>
                        </div>
                        <div>
                            <label
                                class="block text-xs font-medium text-slate-500 dark:text-slate-400 mb-1 ml-1">Passengers</label>
                            <div class="relative">
                                <span
                                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                                <input
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-none ring-1 ring-slate-200 dark:ring-slate-700 rounded-lg focus:ring-2 focus:ring-brand-teal text-slate-900 dark:text-white font-medium"
                                    max="6" min="1" type="number" value="1" />
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 bg-brand-teal hover:bg-brand-dark-teal text-white font-bold py-3.5 rounded-lg shadow-lg shadow-teal-500/20 transition-all active:scale-[0.98]"
                            type="submit">
                            Update Search
                        </button>
                    </form>
                </div>
                <div
                    class="bg-gradient-to-br from-brand-teal to-emerald-600 rounded-xl p-6 text-white shadow-lg relative overflow-hidden">
                    <div class="absolute top-0 right-0 opacity-10 transform translate-x-4 -translate-y-4">
                        <span class="material-icons text-9xl">local_taxi</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 relative z-10">Drive with TaxiYa</h3>
                    <p class="text-sm opacity-90 mb-4 relative z-10">Become a Grand Taxi partner and earn more on your own
                        schedule.</p>
                    <button
                        class="bg-white text-brand-teal font-bold px-4 py-2 rounded text-sm relative z-10 hover:bg-opacity-90 transition">Learn
                        More</button>
                </div>
            </aside>
            <section class="flex-grow space-y-6">
                <div
                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <div>
                        <h1 class="text-xl font-bold text-slate-900 dark:text-white">Casablanca <span
                                class="text-slate-400 mx-2">→</span> Rabat</h1>
                        <p class="text-slate-500 text-sm">24 Oct • 1 Passenger • <span
                                class="text-brand-teal font-medium">12 rides available</span></p>
                    </div>
                    <div class="flex items-center gap-2 bg-slate-100 dark:bg-slate-800 p-1 rounded-lg">
                        <button
                            class="px-4 py-1.5 bg-white dark:bg-slate-700 shadow-sm rounded-md text-sm font-bold text-brand-teal dark:text-white">Cheapest</button>
                        <button
                            class="px-4 py-1.5 text-slate-600 dark:text-slate-400 hover:bg-white/50 dark:hover:bg-slate-700/50 rounded-md text-sm font-medium transition-colors">Earliest</button>
                        <button
                            class="px-4 py-1.5 text-slate-600 dark:text-slate-400 hover:bg-white/50 dark:hover:bg-slate-700/50 rounded-md text-sm font-medium transition-colors">Rating</button>
                    </div>
                </div>
                <div
                    class="group relative bg-white dark:bg-slate-900 rounded-xl p-5 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-brand-teal/30 transition-all duration-300">
                    <div
                        class="absolute top-0 right-0 bg-brand-teal text-white text-xs font-bold px-3 py-1 rounded-bl-xl rounded-tr-xl">
                        Best Value</div>
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="flex-grow md:w-1/3 flex flex-col justify-center">
                            <div class="flex items-center gap-4">
                                <div class="flex flex-col items-center gap-1">
                                    <span class="text-lg font-bold text-slate-900 dark:text-white">09:00</span>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <div class="w-0.5 h-8 bg-slate-200 dark:bg-slate-700"></div>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <span class="text-lg font-bold text-slate-400">10:15</span>
                                </div>
                                <div class="flex flex-col gap-9 text-sm text-slate-500 dark:text-slate-400">
                                    <span class="font-medium">Casablanca (Gare Voyageurs)</span>
                                    <span class="font-medium">Rabat (Agdal)</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="md:w-1/3 border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="relative">
                                    <img alt="Driver Ahmed Portrait"
                                        class="w-12 h-12 rounded-full object-cover border border-slate-200 dark:border-slate-700"
                                        data-alt="Portrait of taxi driver Ahmed smiling"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxIx3EiWwbs1IKw5OHg_Q7RLcmLhiZzE31k9SZtgtCiAi7vv80zOYxDtNkJofpdZLvGUMykf3seoAzr_QsLh7eqfeNoyuUs4dRqsjHq2UXZtGX0tBa3r8JfTm_UiWLLj46rjNKWcWkCHJ1-oJJr7NzcGQuPXksXTNi69NiN3y2wsd5YK0Qne7TFeNhpc1JV6zHyQf5YAklhD3GPnGcps7k9NWPwsfsd8cuY7lmVvElOuWr4opFfkOKuTzWa_3GFLfjKssEEXw_Nw" />
                                    <div class="absolute -bottom-1 -right-1 bg-white dark:bg-slate-900 p-0.5 rounded-full">
                                        <span class="material-icons text-brand-teal text-xs">verified</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">Ahmed B.</h4>
                                    <div class="flex items-center text-xs text-slate-500">
                                        <span class="material-icons text-brand-orange text-[14px] mr-1">star</span>
                                        <span class="font-bold text-slate-800 dark:text-slate-200 mr-1">4.9</span>
                                        <span>(124 rides)</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-2 text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/50 p-2 rounded-lg w-fit">
                                <span class="material-icons text-base">directions_car</span>
                                <span>Mercedes 240 (Classic)</span>
                            </div>
                        </div>
                        <div
                            class="md:w-1/4 flex flex-col justify-between items-end border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6">
                            <div class="text-right">
                                <div class="text-3xl font-bold text-brand-teal">60 <span
                                        class="text-base font-normal text-slate-500">MAD</span></div>
                                <div class="text-xs text-slate-400">per seat</div>
                            </div>
                            <div class="flex flex-col items-end gap-2 w-full mt-4 md:mt-0">
                                <span
                                    class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    4 seats left
                                </span>
                                <button
                                    class="w-full bg-brand-teal hover:bg-brand-dark-teal text-white font-bold py-2.5 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-slate-900 rounded-xl p-5 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-brand-teal/30 transition-all duration-300">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="flex-grow md:w-1/3 flex flex-col justify-center">
                            <div class="flex items-center gap-4">
                                <div class="flex flex-col items-center gap-1">
                                    <span class="text-lg font-bold text-slate-900 dark:text-white">09:30</span>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <div class="w-0.5 h-8 bg-slate-200 dark:bg-slate-700"></div>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <span class="text-lg font-bold text-slate-400">10:45</span>
                                </div>
                                <div class="flex flex-col gap-9 text-sm text-slate-500 dark:text-slate-400">
                                    <span class="font-medium">Casablanca (Sidi Bernoussi)</span>
                                    <span class="font-medium">Rabat (Kamra)</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="md:w-1/3 border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-3">
                                <img alt="Driver Karim Portrait"
                                    class="w-12 h-12 rounded-full object-cover border border-slate-200 dark:border-slate-700"
                                    data-alt="Portrait of taxi driver Karim looking serious but friendly"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9b2DsWisoGln1ROWzw04CeRTuoqIHGqNckqXFKBEdNVdGFhEqz7qjJ5-XsYP6TmJebdHJ8QXOoFV4LQiYdEE6hxE8w1x4ZF4NGn3aJnN0jtaRbECswverXPWJZFKjhr9gRjWVyEJvQROb0dxvQQZ0GKjPC9467--ykbPu7GPWZRSio5rmQkMQzqo3www2ytlOGkFmzNz7IFn4GScLk22btqZufy6y7p6cIZ_Cz92m2fI-dQxEkqctG2HqCVL6tMMcK1GguOSZVg" />
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">Karim T.</h4>
                                    <div class="flex items-center text-xs text-slate-500">
                                        <span class="material-icons text-brand-orange text-[14px] mr-1">star</span>
                                        <span class="font-bold text-slate-800 dark:text-slate-200 mr-1">4.5</span>
                                        <span>(86 rides)</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-2 text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/50 p-2 rounded-lg w-fit">
                                <span class="material-icons text-base">airport_shuttle</span>
                                <span>Dacia Lodgy (7 Seater)</span>
                            </div>
                        </div>
                        <div
                            class="md:w-1/4 flex flex-col justify-between items-end border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6">
                            <div class="text-right">
                                <div class="text-3xl font-bold text-brand-teal">55 <span
                                        class="text-base font-normal text-slate-500">MAD</span></div>
                                <div class="text-xs text-slate-400">per seat</div>
                            </div>
                            <div class="flex flex-col items-end gap-2 w-full mt-4 md:mt-0">
                                <span
                                    class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-bold bg-brand-accent/10 text-brand-accent dark:bg-brand-accent/20">
                                    <span class="material-icons text-[14px]">local_fire_department</span>
                                    Only 1 seat left
                                </span>
                                <button
                                    class="w-full bg-white dark:bg-slate-800 border-2 border-brand-teal text-brand-teal hover:bg-brand-teal hover:text-white font-bold py-2.5 px-4 rounded-lg transition-colors">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-slate-900 rounded-xl p-5 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-brand-teal/30 transition-all duration-300">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="flex-grow md:w-1/3 flex flex-col justify-center">
                            <div class="flex items-center gap-4">
                                <div class="flex flex-col items-center gap-1">
                                    <span class="text-lg font-bold text-slate-900 dark:text-white">10:00</span>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <div class="w-0.5 h-8 bg-slate-200 dark:bg-slate-700"></div>
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-300 dark:bg-slate-600"></div>
                                    <span class="text-lg font-bold text-slate-400">11:30</span>
                                </div>
                                <div class="flex flex-col gap-9 text-sm text-slate-500 dark:text-slate-400">
                                    <span class="font-medium">Casablanca (Ain Sebaa)</span>
                                    <span class="font-medium">Rabat (Ville)</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="md:w-1/3 border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-3">
                                <img alt="Driver Said Portrait"
                                    class="w-12 h-12 rounded-full object-cover border border-slate-200 dark:border-slate-700"
                                    data-alt="Portrait of taxi driver Said with sunglasses"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD00Np7orn2HYAMiBsO8O0ySC6Iraz-ooQTLE1brulVJzGljZ4m0eewjfxpH-24GBSX9oABJjbhP8OA-R60xQTwo1kbeRhScqOJkMvjtj-3cJE6s4RMfs_RVy5gLl2jvqFXoQ2Mi5lcAO-RSvVDz1gslbuuzLpNnud6Tb_tErAiv95S4_GD2mLXzi-L07ha_ikkAEbUhQhfRXcI63xOi724vcgaoMgIvxfkvn1toS2LUVCP4G1hb1nWNOjtBbsM-uKcd9ya4TQKcg" />
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white">Said M.</h4>
                                    <div class="flex items-center text-xs text-slate-500">
                                        <span class="material-icons text-brand-orange text-[14px] mr-1">star</span>
                                        <span class="font-bold text-slate-800 dark:text-slate-200 mr-1">4.2</span>
                                        <span>(42 rides)</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-2 text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/50 p-2 rounded-lg w-fit">
                                <span class="material-icons text-base">directions_car</span>
                                <span>Peugeot 505 (Classic)</span>
                            </div>
                        </div>
                        <div
                            class="md:w-1/4 flex flex-col justify-between items-end border-t md:border-t-0 md:border-l border-slate-100 dark:border-slate-800 pt-4 md:pt-0 md:pl-6">
                            <div class="text-right">
                                <div class="text-3xl font-bold text-brand-teal">50 <span
                                        class="text-base font-normal text-slate-500">MAD</span></div>
                                <div class="text-xs text-slate-400">per seat</div>
                            </div>
                            <div class="flex flex-col items-end gap-2 w-full mt-4 md:mt-0">
                                <span
                                    class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    3 seats left
                                </span>
                                <button
                                    class="w-full bg-white dark:bg-slate-800 border-2 border-brand-teal text-brand-teal hover:bg-brand-teal hover:text-white font-bold py-2.5 px-4 rounded-lg transition-colors">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4 flex justify-center">
                    <button
                        class="flex items-center gap-2 text-slate-500 dark:text-slate-400 hover:text-brand-teal dark:hover:text-brand-teal transition-colors font-medium">
                        <span>Show more rides</span>
                        <span class="material-icons">expand_more</span>
                    </button>
                </div>
            </section>
        </div>
    </main>
@endsection

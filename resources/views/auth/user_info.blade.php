@extends('layouts.auth')

@section('content')
    <main class="flex-1 flex overflow-hidden">
        <!-- Left Side: Trust & Value Prop (Hidden on mobile, visible on lg) -->
        <aside
            class="hidden lg:flex w-1/3 xl:w-1/4 bg-slate-50 dark:bg-[#15202b] flex-col justify-between border-r border-gray-200 dark:border-gray-800 relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute inset-0 z-0 opacity-10 dark:opacity-5 pointer-events-none">
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 rounded-full blur-3xl"></div>
            </div>
            <div class="p-8 xl:p-12 relative z-10">
                <h2 class="text-3xl font-bold mb-6 text-slate-900 dark:text-white leading-tight">Drive with Morocco's most
                    trusted network.</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-8">Join over 5,000 Grand Taxi drivers earning more with
                    flexible digital bookings.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">payments</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Weekly Payouts</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Get paid every Monday directly to your
                                bank account.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">schedule</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Flexible Hours</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">You decide when you want to drive. No
                                minimum hours.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">verified_user</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Full Insurance</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Coverage for you and your passengers on
                                every trip.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 xl:p-12 relative z-10 mt-auto">
                <div
                    class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 flex items-center gap-4">
                    <img alt="Portrait of a smiling Moroccan taxi driver"
                        class="w-12 h-12 rounded-full object-cover border-2 border-white dark:border-slate-600 shadow-sm"
                        data-alt="Close up portrait of a smiling middle aged man"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQksS8GLhr0AO5NBbic-8uBGV5ouDw_95KzQ8Hphzuap9e_yUo8A4SjF7jp7XTHyzzOJoh6SPlwFppwnR86uK7evNmjtkAv9FB7isDO1oTemRecDYuIw3rPXhcGCFBcEigUpxi_0bHhpu6bB77lOhEgYhtsYjHxQoO5R2oQxbqhGknLQx67TtiLis_UbgMmQnpNFXPB-DjF7cAiGeCyZ_-Aiho2yb_1beQGjH0LxxHA-INU06biw7-YnMLwi3ekrdCwGDVkSxyaw" />
                    <div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 italic">"Since joining TaxiYa, my bookings have
                            doubled and I spend less time waiting at stations."</p>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-1">— Ahmed B., Casablanca</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                    <button
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors"
                        type="submit">
                        <span class="font-medium">Log Out</span>
                    </button>
                </div>
            </form>
        </aside>
        <!-- Right Side: Registration Form -->
        <div class="flex-1 overflow-y-auto w-full relative">
            <div class="max-w-2xl mx-auto px-6 py-12 lg:py-16">
                <!-- Progress Bar -->
                <div class="mb-10">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Step 2
                            of 3</span>
                        <span class="text-xs font-medium text-primary">50% Completed</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                        <div class="bg-primary h-2 rounded-full transition-all duration-500" style="width: 50%"></div>
                    </div>
                    <!-- Steps text visualization -->
                    <div class="flex justify-between mt-4 text-xs font-medium text-slate-400 sm:flex">
                        <span class="text-primary">Personal Info</span>
                        <span class="text-slate-900 dark:text-white">Vehicle Details</span>
                        <span>Review</span>
                    </div>
                </div>
                <!-- Form Card -->
                <div
                    class="bg-white dark:bg-[#1a2632] rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden">
                    <div class="p-8">
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Vehicle Information</h1>
                            <p class="text-slate-500 dark:text-slate-400">Tell us about the Grand Taxi you will be driving.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('taxi-info') }}" class="space-y-6">
                            @csrf
                            <!-- Vehicle Make & Model Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                        for="vehicle_model">Vehicle Make</label>
                                    <input
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                        id="vehicle_make" name="vehicule_make" placeholder="Mercedes-Benz" type="text" />
                                    <x-input-error :messages="$errors->get('vehicule_make')" class="mt-2" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                        for="model">Vehicle Model</label>
                                    <input
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                        id="model" name="model" placeholder="e.g. 240, Lodgy" type="text" />
                                    <x-input-error :messages="$errors->get('model')" class="mt-2" />
                                </div>
                            </div>
                            <!-- Year & Color Grid -->
                            <div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                        for="year_manufacture">Year of Manufacture</label>
                                    <input
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                        id="year_manufacture" name="year_manufacture" placeholder="2018" type="number" />
                                    <x-input-error :messages="$errors->get('year_manufacture')" class="mt-2" />
                                </div>

                            </div>
                            <!-- License Plate -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="license_plate">License Plate Number</label>
                                <div class="flex gap-2">
                                    <input name="plate_number"
                                        class="flex-1 rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 text-center font-mono"
                                        placeholder="12345" type="text" />

                                    <input name="plate_letter"
                                        class="w-16 rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 text-center font-mono"
                                        placeholder="أ" type="text" />
                                    <input name="plate_region"
                                        class="w-16 rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 text-center font-mono"
                                        placeholder="6" type="text" />
                                </div>
                                <p class="text-xs text-slate-500 mt-1">Format: 12345 | Letter | 6 (Region code)</p>
                                <x-input-error :messages="$errors->get('plate_number')" class="mt-2" />
                                <x-input-error :messages="$errors->get('plate_letter')" class="mt-2" />
                                <x-input-error :messages="$errors->get('plate_region')" class="mt-2" />
                            </div>
                            <!-- Grima / Permit Number -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="taxi_number">Grand Taxi Number</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="material-icons text-gray-400 text-sm">badge</span>
                                    </span>
                                    <input
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                        id="taxi_number" placeholder="GT-XXXXXX" name="taxi_number" type="text" />
                                    <x-input-error :messages="$errors->get('taxi_number')" class="mt-2" />

                                </div>
                            </div>
                            <hr class="border-gray-100 dark:border-gray-700 my-6" />
                    </div>
                    <!-- Form Actions -->
                    <div
                        class="px-8 py-5 bg-gray-50 dark:bg-[#15202b] border-t border-gray-100 dark:border-gray-700 flex items-center justify-between">
                        <button
                            class="text-slate-600 dark:text-slate-300 font-medium hover:text-primary transition-colors flex items-center gap-1 text-sm"
                            </button>
                            <button
                                class="bg-primary hover:bg-blue-600 text-white font-medium py-2.5 px-8 rounded-lg shadow-sm shadow-blue-500/30 transition-all flex items-center gap-2"
                                type="submit">
                                Continue
                                <span class="material-icons text-sm">arrow_forward</span>
                            </button>
                    </div>
                </div>
                </form>
                <!-- Footer Links -->
                <div class="mt-8 flex justify-center gap-6 text-xs text-slate-500 dark:text-slate-400">
                    <a class="hover:underline" href="#">Privacy Policy</a>
                    <a class="hover:underline" href="#">Terms of Service</a>
                    <a class="hover:underline" href="#">Contact Support</a>
                </div>
            </div>
        </div>
    </main>
@endsection

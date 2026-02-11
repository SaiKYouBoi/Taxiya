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
    </aside>
    <!-- Right Side: Registration Form -->
    <div class="flex-1 overflow-y-auto w-full relative">
        <div class="max-w-2xl mx-auto px-6 py-12 lg:py-16">
            <!-- Progress Bar -->
            <div class="mb-10">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Step 2
                        of 4</span>
                    <span class="text-xs font-medium text-primary">50% Completed</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-primary h-2 rounded-full transition-all duration-500" style="width: 50%"></div>
                </div>
                <!-- Steps text visualization -->
                <div class="flex justify-between mt-4 text-xs font-medium text-slate-400 sm:flex">
                    <span class="text-primary">Personal Info</span>
                    <span class="text-slate-900 dark:text-white">Vehicle Details</span>
                    <span>Documents</span>
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
                    <form class="space-y-6">
                        <!-- Vehicle Make & Model Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="vehicle_make">Vehicle Make</label>
                                <select
                                    class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                    id="vehicle_make">
                                    <option>Mercedes-Benz</option>
                                    <option>Dacia</option>
                                    <option>Fiat</option>
                                    <option>Peugeot</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="vehicle_model">Vehicle Model</label>
                                <input
                                    class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                    id="vehicle_model" placeholder="e.g. 240, Lodgy" type="text" />
                            </div>
                        </div>
                        <!-- Year & Color Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="vehicle_year">Year of Manufacture</label>
                                <input
                                    class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                    id="vehicle_year" placeholder="2018" type="number" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="vehicle_color">Color</label>
                                <div class="relative">
                                    <select
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                        id="vehicle_color">
                                        <option>White</option>
                                        <option>Silver</option>
                                        <option>Cream (Grand Taxi)</option>
                                        <option>Black</option>
                                    </select>
                                    <span
                                        class="absolute left-3 top-3 w-4 h-4 rounded-full bg-yellow-100 border border-gray-300"></span>
                                </div>
                            </div>
                        </div>
                        <!-- License Plate -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                for="license_plate">License Plate Number</label>
                            <div class="flex gap-2">
                                <input
                                    class="flex-1 rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 text-center font-mono"
                                    placeholder="12345" type="text" />
                                <div
                                    class="w-16 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg border border-gray-300 dark:border-gray-600 font-arabic text-lg">
                                    أ
                                </div>
                                <input
                                    class="w-16 rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 text-center font-mono"
                                    placeholder="6" type="text" />
                            </div>
                            <p class="text-xs text-slate-500 mt-1">Format: 12345 | Letter | 6 (Region code)</p>
                        </div>
                        <!-- Grima / Permit Number -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                for="permit_number">Grand Taxi Permit Number (Grima)</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400 text-sm">badge</span>
                                </span>
                                <input
                                    class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                    id="permit_number" placeholder="GT-XXXXXX" type="text" />
                            </div>
                        </div>
                        <hr class="border-gray-100 dark:border-gray-700 my-6" />
                        <!-- Vehicle Photo Upload Preview -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Vehicle
                                Photo</label>
                            <div
                                class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-xl p-6 flex flex-col items-center justify-center hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors cursor-pointer group bg-white dark:bg-slate-800">
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                                    <span class="material-icons">add_a_photo</span>
                                </div>
                                <p class="text-sm font-medium text-slate-900 dark:text-white text-center">Click or drag
                                    to upload photo</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 text-center mt-1">Please ensure
                                    the license plate is visible. JPG or PNG.</p>
                            </div>
                            <!-- Simulating an uploaded file for demo -->
                            <div
                                class="mt-3 flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3">
                                    <img alt="Preview of a car photo" class="w-10 h-10 rounded object-cover"
                                        data-alt="Small thumbnail preview of a white car"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoP23WinIMenMKFDtpJ6HXJtVXdh55Y5JIu0pawxc0VZxGCHqv2hV7WNxG6xkQbqheVl89xjnSB3eufZWPl1DIs-BtyanMhrNnACfKM4DNdYCyyz6H2lWCbRJGwyR8hXeIafgik4bf2y3A_7USKHuMN3Dq0yTeX7F35lyQM6jQer3htnKn0ud7Ykdp5P6Kn4n7F94-b4FO3ndPeOYHLfYgEpTeXTXH8HRu-aGh8rEOtDwGfOYdrAqoqeLlIiW5YqKKlyLeyirniA" />
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">my_taxi_front.jpg
                                        </p>
                                        <p class="text-xs text-green-600 dark:text-green-400 flex items-center gap-1">
                                            <span class="material-icons text-[10px]">check_circle</span> Upload
                                            successful
                                        </p>
                                    </div>
                                </div>
                                <button class="text-slate-400 hover:text-red-500 transition-colors" type="button">
                                    <span class="material-icons text-lg">delete</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Form Actions -->
                <div
                    class="px-8 py-5 bg-gray-50 dark:bg-[#15202b] border-t border-gray-100 dark:border-gray-700 flex items-center justify-between">
                    <button
                        class="text-slate-600 dark:text-slate-300 font-medium hover:text-primary transition-colors flex items-center gap-1 text-sm"
                        type="button">
                        <span class="material-icons text-base">arrow_back</span>
                        Back
                    </button>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white font-medium py-2.5 px-8 rounded-lg shadow-sm shadow-blue-500/30 transition-all flex items-center gap-2"
                        type="button">
                        Continue
                        <span class="material-icons text-sm">arrow_forward</span>
                    </button>
                </div>
            </div>
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

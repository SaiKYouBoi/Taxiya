@extends('layouts.auth')

@section('content')
    <main class="flex-1 flex overflow-hidden">
        <aside
            class="hidden lg:flex w-1/3 xl:w-1/4 bg-slate-50 dark:bg-[#15202b] flex-col justify-between border-r border-gray-200 dark:border-gray-800 relative overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-10 dark:opacity-5 pointer-events-none">
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-teal-400 rounded-full blur-3xl"></div>
            </div>
            <div class="p-8 xl:p-12 relative z-10">
                <h2 class="text-3xl font-bold mb-6 text-slate-900 dark:text-white leading-tight">Join Morocco's #1 Grand Taxi
                    Network.</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-8">Connect with thousands of travelers and drivers across the
                    Kingdom.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">security</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Verified Community</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">All drivers and travelers are ID verified
                                for your safety.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">map</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Real-time Tracking</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Share your ride status with family and
                                friends instantly.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <span class="material-icons text-primary">savings</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white">Fair Pricing</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Transparent rates for every trip, no
                                haggling required.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 xl:p-12 relative z-10 mt-auto">
                <div
                    class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 flex items-center gap-4">
                    <img alt="Portrait of a smiling Moroccan taxi driver"
                        class="w-12 h-12 rounded-full object-cover border-2 border-white dark:border-slate-600 shadow-sm"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQksS8GLhr0AO5NBbic-8uBGV5ouDw_95KzQ8Hphzuap9e_yUo8A4SjF7jp7XTHyzzOJoh6SPlwFppwnR86uK7evNmjtkAv9FB7isDO1oTemRecDYuIw3rPXhcGCFBcEigUpxi_0bHhpu6bB77lOhEgYhtsYjHxQoO5R2oQxbqhGknLQx67TtiLis_UbgMmQnpNFXPB-DjF7cAiGeCyZ_-Aiho2yb_1beQGjH0LxxHA-INU06biw7-YnMLwi3ekrdCwGDVkSxyaw" />
                    <div>
                        <p class="text-xs text-slate-500 dark:text-slate-400 italic">"TaxiYa makes finding customers easy
                            and safe for everyone."</p>
                        <p class="text-xs font-bold text-slate-900 dark:text-white mt-1">— Ahmed B., Casablanca</p>
                    </div>
                </div>
            </div>
        </aside>
        <div class="flex-1 overflow-y-auto w-full relative">
            <div class="max-w-2xl mx-auto px-6 py-12 lg:py-16">
                <div class="mb-10">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Step 1
                            of 3</span>
                        <span class="text-xs font-medium text-primary">Start Registration</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                        <div class="bg-primary h-2 rounded-full transition-all duration-500" style="width: 33%"></div>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-[#1a2632] rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden">
                    <div class="p-8">
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Create your account</h1>
                            <p class="text-slate-500 dark:text-slate-400">Choose how you want to use TaxiYa.</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="space-y-8">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                    for="name">Full Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="material-icons text-gray-400 text-sm">person</span>
                                    </div>
                                    <input
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                        id="full_name" placeholder="e.g. Youssef El Amrani" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="space-y-4">
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">I am
                                    a...</label>
                                <input type="hidden" name="role" id="selected-role" value="">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <label class="relative cursor-pointer group role-option" data-role="traveler">
                                        <div
                                            class="p-4 rounded-xl border-2 border-gray-200 dark:border-gray-600 hover:border-primary/50 transition-all bg-white dark:bg-slate-800 h-full flex flex-col items-center text-center gap-3">
                                            <div
                                                class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/20 text-orange-600 dark:text-orange-400 flex items-center justify-center">
                                                <span class="material-icons">luggage</span>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-slate-900 dark:text-white">Traveler</h3>
                                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Book rides
                                                    and
                                                    travel across cities.</p>
                                            </div>
                                            <div
                                                class="absolute top-3 right-3 opacity-0 transform scale-50 transition-all duration-200 check-icon">
                                                <span class="material-icons text-primary text-xl">check_circle</span>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="relative cursor-pointer role-option" data-role="driver">
                                        <div
                                            class="p-4 rounded-xl border-2 border-gray-200 dark:border-gray-600 hover:border-primary/50 transition-all bg-white dark:bg-slate-800 h-full flex flex-col items-center text-center gap-3">
                                            <div
                                                class="w-12 h-12 rounded-full bg-teal-100 dark:bg-teal-900/20 text-teal-600 dark:text-teal-400 flex items-center justify-center">
                                                <span class="material-icons">directions_car</span>
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-slate-900 dark:text-white">Driver</h3>
                                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Accept
                                                    bookings
                                                    and earn money.</p>
                                            </div>
                                            <div
                                                class="absolute top-3 right-3 opacity-0 transform scale-50 transition-all duration-200 check-icon">
                                                <span class="material-icons text-primary text-xl">check_circle</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>

                            <div
                                class="mt-4 bg-amber-50 dark:bg-amber-900/10 border border-amber-100 dark:border-amber-800 rounded-lg p-4 flex gap-3">
                                <span
                                    class="material-icons text-amber-600 dark:text-amber-400 shrink-0">admin_panel_settings</span>
                                <div>
                                    <h4 class="text-sm font-bold text-amber-900 dark:text-amber-300">Important for
                                        Drivers
                                    </h4>
                                    <p class="text-xs text-amber-700 dark:text-amber-400 mt-0.5">
                                        If you register as a Driver, your account will be <strong>Pending
                                            Validation</strong> until an admin approves your documents.
                                    </p>
                                </div>
                            </div>
                            <div class="border-t border-gray-100 dark:border-gray-700 pt-6">
                                <h3 class="text-lg font-medium text-slate-900 dark:text-white mb-4">Personal Details
                                </h3>
                                <div class="grid grid-cols-1 gap-6">

                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                            for="email">Email Address</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="material-icons text-gray-400 text-sm">email</span>
                                            </div>
                                            <input
                                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                                id="email" placeholder="youssef@example.com" type="email"
                                                name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                            for="password">Password</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="material-icons text-gray-400 text-sm">password</span>
                                            </div>
                                            <input
                                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                                id="password" placeholder="***********" type="password" name="password"
                                                required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                            for="password_confirmation">Confirm Password</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="material-icons text-gray-400 text-sm">password</span>
                                            </div>
                                            <input
                                                class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5 pl-10"
                                                id="full_name" placeholder="***********" type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1"
                                            for="phone">Phone Number</label>
                                        <div class="flex">
                                            <div
                                                class="flex items-center justify-center px-3 rounded-l-lg border border-r-0 border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-slate-700 text-slate-500 dark:text-slate-300 sm:text-sm">
                                                <img alt="Morocco" class="mr-2"
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtERfQeFYRTLcGQsLGJXiSFnKcZw2ZYi-5PZ1ZLz95ngwDSKBMDg8JpFg4_OnLbETKH6HEjzXiKzv6ubixEi26-ASr0_FbONl4QrHeEwle7ieLwPddMUgY29h5HC6kRFNcyh2yjMVQrpNhCEAr7ekL5tA9yLjulwIlqFFWCV73mz_fjvihP7Sud9EVZ8HEiZZ9ncbLDMLiR3SQ7_LGPwx0Q4mT-qtZKEkvHl5uhTitJpXT08KBMVLiunqZbX6bJZm_NorbDlVv2g"
                                                    srcset="https://flagcdn.com/w40/ma.png 2x" width="20" />
                                                +212
                                            </div>
                                            <input
                                                class="flex-1 rounded-r-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-all py-2.5"
                                                :value="old('phone')" id="phone" name="phone"
                                                placeholder="6 00 00 00 00" type="tel" />
                                        </div>
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                    </div>

                    <div
                        class="px-8 py-5 bg-gray-50 dark:bg-[#15202b] border-t border-gray-100 dark:border-gray-700 flex items-center justify-end">
                        <a class="mr-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <button
                            class="bg-primary hover:bg-primary-dark text-white font-medium py-2.5 px-8 rounded-lg shadow-sm shadow-teal-500/30 transition-all flex items-center gap-2"
                            type="submit">
                            Continue
                            <span class="material-icons text-sm">arrow_forward</span>
                        </button>
                    </div>

                </div>
                </form>
                <div class="mt-8 flex justify-center gap-6 text-xs text-slate-500 dark:text-slate-400">
                    <a class="hover:underline" href="#">Privacy Policy</a>
                    <a class="hover:underline" href="#">Terms of Service</a>
                    <a class="hover:underline" href="#">Contact Support</a>
                </div>
            </div>
        </div>
        <script>
            const roleOptions = document.querySelectorAll('.role-option');
            const hiddenRoleInput = document.getElementById('selected-role');

            roleOptions.forEach((option, index) => {
                option.addEventListener('click', () => {

                    const role = option.getAttribute('data-role');
                    hiddenRoleInput.value = role; // ✅ set hidden input value

                    roleOptions.forEach((otherOption) => {

                        const card = otherOption.querySelector('div');
                        const checkIcon = otherOption.querySelector('.check-icon');

                        if (otherOption === option) {
                            // Selected
                            card.classList.remove('border-gray-200', 'dark:border-gray-600');
                            card.classList.add('border-primary');

                            checkIcon.classList.remove('opacity-0', 'scale-50');
                            checkIcon.classList.add('opacity-100', 'scale-100');

                        } else {
                            // Reset others
                            card.classList.remove('border-primary');
                            card.classList.add('border-gray-200', 'dark:border-gray-600');

                            checkIcon.classList.remove('opacity-100', 'scale-100');
                            checkIcon.classList.add('opacity-0', 'scale-50');
                        }
                    });

                });
            });
        </script>
    </main>
@endsection

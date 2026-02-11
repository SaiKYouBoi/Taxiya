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
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Step 3
                        of 3</span>
                    <span class="text-xs font-medium text-primary">Confirmation</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-primary h-2 rounded-full transition-all duration-500" style="width: 100%"></div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#1a2632] rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden text-center">
                <div class="p-8 md:p-12 flex flex-col items-center justify-center">
                    <div
                        class="w-20 h-20 bg-teal-50 dark:bg-teal-900/30 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-5xl text-primary">schedule</span>
                    </div>
                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">Application Submitted</h1>
                    <div class="max-w-md mx-auto space-y-4">
                        <div
                            class="bg-blue-50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-800 rounded-lg p-4">
                            <h4
                                class="text-base font-bold text-blue-900 dark:text-blue-300 flex items-center justify-center gap-2">
                                <span class="material-icons text-blue-600 dark:text-blue-400 text-sm">pending</span>
                                Pending Validation
                            </h4>
                            <p class="text-sm text-blue-700 dark:text-blue-400 mt-1">
                                Your driver application is currently under review.
                            </p>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400">
                            Our team will review your submitted documents (Driver's License, Vehicle Permit, and
                            Insurance) within <strong class="text-slate-900 dark:text-white">24-48 hours</strong>.
                        </p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm">
                            You will receive an email notification at <span
                                class="font-medium text-slate-900 dark:text-white">youssef@example.com</span> once your
                            account has been approved and activated.
                        </p>
                    </div>
                </div>
                <div
                    class="px-8 py-6 bg-gray-50 dark:bg-[#15202b] border-t border-gray-100 dark:border-gray-700 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button
                        class="w-full sm:w-auto bg-primary hover:bg-primary-dark text-white font-medium py-3 px-6 rounded-lg shadow-sm shadow-teal-500/30 transition-all flex items-center justify-center gap-2">
                        <span class="material-icons text-lg">dashboard</span>
                        Go to Dashboard (View Only)
                    </button>
                </div>
            </div>
            <div class="mt-8 flex justify-center gap-6 text-xs text-slate-500 dark:text-slate-400">
                <a class="hover:underline" href="#">Privacy Policy</a>
                <a class="hover:underline" href="#">Terms of Service</a>
                <a class="hover:underline" href="#">Contact Support</a>
            </div>
        </div>
    </div>
</main>
@endsection

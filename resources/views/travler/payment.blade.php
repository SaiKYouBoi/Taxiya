@extends('layouts.main')
@section('content')
    <main class="flex-grow container mx-auto px-4 py-8 lg:px-8 max-w-7xl">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Secure Booking Payment</h1>
            <p class="text-slate-500 dark:text-slate-400">Complete your payment to secure your seat.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-5 space-y-6 order-2 lg:order-1">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 dark:border-slate-800">
                        <h2 class="text-lg font-bold flex items-center gap-2 mb-4">
                            <span class="material-icons-outlined text-primary">map</span>
                            Trip Summary
                        </h2>
                        <div class="flex flex-col gap-1 mb-6">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Casablanca</h3>
                                <span class="material-icons text-slate-400">arrow_forward</span>
                                <h3 class="text-xl font-bold">Marrakech</h3>
                            </div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Grand Taxi • Shared Ride</p>
                        </div>
                        <div class="relative pl-4 border-l-2 border-slate-200 dark:border-slate-700 space-y-6 my-6">
                            <div class="relative">
                                <div
                                    class="absolute -left-[21px] top-1 h-3 w-3 rounded-full bg-primary border-2 border-white dark:border-slate-900">
                                </div>
                                <p class="font-bold">08:00 AM</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Gare Voyageurs, Casa</p>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute -left-[21px] top-1 h-3 w-3 rounded-full bg-slate-300 dark:bg-slate-600 border-2 border-white dark:border-slate-900">
                                </div>
                                <p class="font-bold">11:30 AM</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Gare Routière, Marrakech</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-slate-800/50 flex items-center gap-4">
                        <img alt="Portrait of a smiling driver"
                            class="w-10 h-10 rounded-full object-cover ring-2 ring-white dark:ring-slate-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzmDdbcdHRVnyuD-lKTsrhK_RHW3-sTuDvYP5m3WjZcUjNfGXiISoi8m6ikvcQ1J3Yx85v-7R90SLWHE-DxQem58AoUhlhW_D_-syJxsBcG1i1WEft3xmtLLMz0xSd9A8iediWjCu1kP5qABUcQy4e1Q3UqulWwFu66gYKu7z5XtXpVvVMyzjSJoZzHaH-r6pP0iVa42xhRbkVAdJWnAc1jAQEiYi2b8_sq9OCWYScj5QoDvdLWxpI4Sv_DH9-9he4gN9vf0Q3Ag" />
                        <div>
                            <p class="font-bold text-sm">Ahmed Benali</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Mercedes 240D • <span
                                    class="text-yellow-500">★ 4.8</span></p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
                    <h2 class="text-lg font-bold flex items-center gap-2 mb-6">
                        <span class="material-icons-outlined text-primary">receipt</span>
                        Price Breakdown
                    </h2>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                            <span>Base Fare ({{ $booking->seats->count() }} Seat{{ $booking->seats->count() > 1 ? 's' : '' }})</span>
                            <span class="font-medium">{{ number_format($booking->total_price, 2) }} MAD</span>
                        </div>
                    </div>
                    <div class="border-t border-dashed border-slate-300 dark:border-slate-700 my-4 pt-4">
                        <div class="flex justify-between items-end">
                            <span class="text-base font-bold text-slate-700 dark:text-slate-300">Total Amount</span>
                            <span class="text-3xl font-bold text-primary">{{ number_format($booking->total_price, 2) }} <span
                                    class="text-sm font-normal text-slate-500">MAD</span></span>
                        </div>
                    </div>
                    <div
                        class="mt-4 flex items-center gap-2 text-xs text-green-600 bg-green-50 dark:bg-green-900/20 p-2 rounded justify-center">
                        <span class="material-icons text-sm">verified_user</span>
                        <span>No hidden fees. Secure transaction.</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6 lg:p-8">
                    <h2 class="text-xl font-bold mb-6">Select Payment Method</h2>
                    <form method="POST" action="{{ route('payment.store', $booking->id) }}" class="space-y-4">
                        @csrf
                        <input type="hidden" name="amount" value="{{ $booking->total_price }}">
                        <label class="cursor-pointer block group">
                            <input checked="" class="payment-radio hidden" name="payment_method" value="credit" type="radio" onclick="toggleCardFields(true)" />
                            <div
                                class="border border-slate-200 dark:border-slate-700 rounded-xl p-4 transition-all duration-200 hover:border-blue-300 dark:hover:border-blue-700">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="radio-circle w-5 h-5 rounded-full border border-slate-300 dark:border-slate-600 flex-shrink-0 mt-1 transition-all">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex justify-between items-center mb-1">
                                            <span class="font-bold text-slate-900 dark:text-white">Credit Card</span>
                                            <div class="flex gap-1">
                                                <div
                                                    class="h-6 w-10 bg-slate-100 rounded border border-slate-200 flex items-center justify-center text-[8px] font-bold text-slate-500">
                                                    VISA</div>
                                                <div
                                                    class="h-6 w-10 bg-slate-100 rounded border border-slate-200 flex items-center justify-center text-[8px] font-bold text-slate-500">
                                                    MC</div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">Pay securely with your credit card.</p>
                                        <div id="card-fields" class="space-y-4 mt-4 bg-slate-50 dark:bg-slate-800/50 p-4 rounded-lg">
                                            <div>
                                                <label class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1">Card Number</label>
                                                <input id="card_number" name="card_number" class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-lg px-3 py-2 text-sm" placeholder="0000 0000 0000 0000" type="text" />
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1">Expiry Date</label>
                                                    <input id="expiry" name="expiry" class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-lg px-3 py-2 text-sm" placeholder="MM/YY" type="text" />
                                                </div>
                                                <div>
                                                    <label class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1">CVV</label>
                                                    <input id="cvv" name="cvv" class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-lg px-3 py-2 text-sm" placeholder="123" type="text" />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-xs font-medium text-slate-700 dark:text-slate-300 mb-1">Cardholder Name</label>
                                                <input id="cardholder" name="cardholder" class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-lg px-3 py-2 text-sm" placeholder="Name on card" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class="cursor-pointer block group">
                            <input class="payment-radio hidden" name="payment_method" value="cash" type="radio" onclick="toggleCardFields(false)" />
                            <div
                                class="border border-slate-200 dark:border-slate-700 rounded-xl p-4 transition-all duration-200 hover:border-blue-300 dark:hover:border-blue-700">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="radio-circle w-5 h-5 rounded-full border border-slate-300 dark:border-slate-600 flex-shrink-0 mt-1 transition-all">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex justify-between items-center mb-1">
                                            <span class="font-bold text-slate-900 dark:text-white">Cash</span>
                                            <span class="material-icons text-green-600">payments</span>
                                        </div>
                                        <p class="text-sm text-slate-500 dark:text-slate-400">Pay with cash to the driver.</p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800">
                        <div class="flex items-start gap-3 mb-6">
                            <input
                                class="mt-1 rounded text-primary focus:ring-primary border-slate-300 dark:border-slate-600"
                                id="terms" type="checkbox" />
                            <label class="text-sm text-slate-600 dark:text-slate-400" for="terms">
                                I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a>
                                and <a class="text-primary hover:underline" href="#">Cancellation Policy</a>. I
                                understand that front seats are non-refundable within 2 hours of departure.
                            </label>
                        </div>
                        <button type="submit"
                            class="w-full bg-primary hover:bg-primary-dark text-white font-bold text-lg py-4 px-6 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-200 flex items-center justify-center gap-2 transform active:scale-[0.99]">
                            <span class="material-icons">lock</span>
                            Confirm &amp; Pay {{ number_format($booking->total_price, 2) }} MAD
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
    function toggleCardFields(show) {
        const fields = ['card_number', 'expiry', 'cvv', 'cardholder'];
        fields.forEach(id => {
            const field = document.getElementById(id);
            if (show) {
                field.required = true;
                document.getElementById('card-fields').style.display = 'block';
            } else {
                field.required = false;
                document.getElementById('card-fields').style.display = 'none';
            }
        });
    }
    </script>
@endsection

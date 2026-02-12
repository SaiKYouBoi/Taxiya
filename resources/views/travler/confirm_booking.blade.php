@extends('layouts.main')

@section('content')

<main class="flex-grow container mx-auto px-4 py-8 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 h-full">
        <div class="lg:col-span-3 space-y-6">
            <div
                class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                <h2 class="text-sm uppercase tracking-wider text-slate-500 dark:text-slate-400 font-semibold mb-4">Trip
                    Details</h2>
                <div class="flex flex-col gap-1 mb-6">
                    <h1 class="text-2xl font-bold leading-tight">{{ $trip->departureCity->name }}</h1>
                    <div class="flex items-center text-slate-400">
                        <span class="material-icons transform rotate-90">arrow_right_alt</span>
                    </div>
                    <h1 class="text-2xl font-bold leading-tight">{{ $trip->arrivalCity->name }}</h1>
                </div>
                <div class="relative pl-4 border-l-2 border-slate-200 dark:border-slate-700 space-y-8 my-8">
                    <div class="relative">
                        <div
                            class="absolute -left-[21px] top-1 h-3 w-3 rounded-full bg-primary border-2 border-white dark:border-slate-900">
                        </div>
                        <p class="text-lg font-bold">{{ $trip->departure_datetime->format('H:i') }}</p>
                        <p class="text-sm text-slate-500 dark:text-slate-400">{{ $trip->departureCity->name }}</p>
                    </div>
                    <div class="relative">
                        <div
                            class="absolute -left-[21px] top-1 h-3 w-3 rounded-full bg-slate-300 dark:bg-slate-600 border-2 border-white dark:border-slate-900">
                        </div>
                        <p class="text-lg font-bold">{{ $trip->arrival_datetime->format('H:i') }}</p>
                        <p class="text-sm text-slate-500 dark:text-slate-400">{{ $trip->arrivalCity->name }}</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300 bg-slate-50 dark:bg-slate-800 p-3 rounded-lg">
                    <span class="material-icons-outlined text-base">schedule</span>
                    <span>~3.5 Hours</span>
                    <span class="mx-1 text-slate-300">|</span>
                    <span class="material-icons-outlined text-base">straighten</span>
                    <span>240 km</span>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                <h2 class="text-sm uppercase tracking-wider text-slate-500 dark:text-slate-400 font-semibold mb-4">Your
                    Driver</h2>
                <div class="flex items-center gap-4">
                    <img alt="Portrait of a smiling driver"
                        class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/20"
                        data-alt="Portrait of a smiling driver"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzmDdbcdHRVnyuD-lKTsrhK_RHW3-sTuDvYP5m3WjZcUjNfGXiISoi8m6ikvcQ1J3Yx85v-7R90SLWHE-DxQem58AoUhlhW_D_-syJxsBcG1i1WEft3xmtLLMz0xSd9A8iediWjCu1kP5qABUcQy4e1Q3UqulWwFu66gYKu7z5XtXpVvVMyzjSJoZzHaH-r6pP0iVa42xhRbkVAdJWnAc1jAQEiYi2b8_sq9OCWYScj5QoDvdLWxpI4Sv_DH9-9he4gN9vf0Q3Ag" />
                    <div>
                        <p class="font-bold">{{ $trip->taxi->driver->name }}</p>
                        <div class="flex items-center text-xs text-slate-500 dark:text-slate-400">
                            <span class="material-icons text-yellow-400 text-sm mr-1">star</span>
                            4.8 (124 trips)
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-slate-500 dark:text-slate-400">Vehicle</span>
                        <span class="font-medium">{{ $trip->taxi->model }}</span>
                    </div>
                    <div class="flex gap-3 mt-3">
                        <div class="tooltip group relative">
                            <span
                                class="material-icons-outlined text-slate-400 hover:text-primary cursor-help">ac_unit</span>
                        </div>
                        <div class="tooltip group relative">
                            <span
                                class="material-icons-outlined text-slate-400 hover:text-primary cursor-help">smoke_free</span>
                        </div>
                        <div class="tooltip group relative">
                            <span
                                class="material-icons-outlined text-slate-400 hover:text-primary cursor-help">luggage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-5 flex flex-col">
            <div
                class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-slate-200 dark:border-slate-800 h-full flex flex-col items-center justify-start relative overflow-hidden">
                <div class="text-center mb-8 z-10">
                    <h3 class="font-bold text-2xl text-slate-800 dark:text-slate-200">Select Your Seat</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Front seats are premium class</p>
                </div>
                <div class="relative w-full max-w-sm mx-auto flex-grow flex items-center justify-center py-4">
                    <div
                        class="relative bg-slate-100 dark:bg-slate-800 rounded-[3rem] border-4 border-slate-300 dark:border-slate-700 shadow-inner p-8 w-full max-w-[340px]">
                        <div
                            class="absolute top-0 left-1/2 -translate-x-1/2 w-[85%] h-24 bg-gradient-to-b from-blue-200/40 to-transparent dark:from-slate-700/40 rounded-b-3xl border-b border-white/20">
                        </div>
                        <div class="relative z-10 flex flex-col gap-10 mt-8">
                            <div class="flex justify-between items-end px-2 gap-4">
                                <div class="w-1/3 flex flex-col items-center group">
                                    <div
                                        class="relative w-full aspect-[4/5] bg-slate-200 dark:bg-slate-700 rounded-2xl border border-slate-300 dark:border-slate-600 shadow-inner flex flex-col items-center justify-center opacity-80">
                                        <div
                                            class="absolute -top-3 w-3/4 h-4 bg-slate-300 dark:bg-slate-600 rounded-md border border-slate-300 dark:border-slate-500">
                                        </div>
                                        <span
                                            class="material-icons text-slate-400 dark:text-slate-500 text-3xl">steering_wheel</span>
                                    </div>
                                    <span
                                        class="text-[10px] uppercase font-bold mt-2 text-slate-400 tracking-wider">Driver</span>
                                </div>
                                <button class="seat-btn w-1/3 flex flex-col items-center group relative">
                                    <div
                                        class="absolute -top-4 -right-2 z-20 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-md transform group-hover:scale-110 transition-transform">
                                        PREMIUM
                                    </div>
                                    <div
                                        class="relative w-full aspect-[4/5] bg-white dark:bg-slate-800 rounded-2xl shadow-seat group-hover:shadow-seat-hover transition-all duration-300 border-2 border-seat-available group-hover:bg-green-50 dark:group-hover:bg-green-900/10 flex flex-col items-center justify-center">
                                        <div
                                            class="absolute -top-3 w-3/4 h-4 bg-seat-available rounded-md shadow-sm group-hover:bg-seat-available-hover transition-colors">
                                        </div>
                                        <div
                                            class="w-2/3 h-1/2 rounded-t-lg border-t-2 border-dashed border-seat-available/30 mt-2">
                                        </div>
                                        <span class="absolute text-seat-available font-bold text-lg">1</span>
                                    </div>
                                    <div
                                        class="seat-tooltip absolute -bottom-10 left-1/2 -translate-x-1/2 w-max bg-slate-800 text-white text-xs rounded px-2 py-1 z-30 pointer-events-none shadow-lg">
                                        Front Seat (+20%)
                                    </div>
                                </button>
                                <button
                                    class="seat-btn w-1/3 flex flex-col items-center group relative transform scale-105">
                                    <div
                                        class="absolute -top-4 -right-2 z-20 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-md">
                                        PREMIUM
                                    </div>
                                    <div
                                        class="relative w-full aspect-[4/5] bg-primary rounded-2xl shadow-lg shadow-blue-500/40 border-2 border-primary flex flex-col items-center justify-center overflow-hidden">
                                        <div class="absolute -top-3 w-3/4 h-4 bg-blue-600 rounded-md shadow-sm"></div>
                                        <span class="material-icons text-white text-3xl drop-shadow-md">check</span>
                                        <span class="absolute bottom-2 text-white/80 text-xs font-medium">2</span>
                                    </div>
                                </button>
                            </div>
                            <div
                                class="bg-slate-200/50 dark:bg-slate-700/30 rounded-3xl p-3 border border-slate-200 dark:border-slate-700/50">
                                <div class="flex justify-between gap-2">
                                    <button class="seat-btn flex-1 flex flex-col items-center group relative">
                                        <div
                                            class="relative w-full aspect-[3/4] bg-white dark:bg-slate-800 rounded-xl shadow-seat group-hover:shadow-seat-hover transition-all duration-300 border-2 border-seat-available group-hover:bg-green-50 dark:group-hover:bg-green-900/10 flex flex-col items-center justify-center">
                                            <div
                                                class="absolute -top-2 w-3/4 h-3 bg-seat-available rounded-sm shadow-sm">
                                            </div>
                                            <span class="text-seat-available font-bold text-sm mt-1">3</span>
                                        </div>
                                    </button>
                                    <div class="flex-1 flex flex-col items-center opacity-60">
                                        <div
                                            class="relative w-full aspect-[3/4] bg-seat-booked dark:bg-slate-700/50 rounded-xl border border-slate-300 dark:border-slate-600 flex flex-col items-center justify-center cursor-not-allowed">
                                            <div
                                                class="absolute -top-2 w-3/4 h-3 bg-slate-300 dark:bg-slate-600 rounded-sm">
                                            </div>
                                            <span class="material-icons text-seat-booked-icon text-xl">person_off</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center opacity-60">
                                        <div
                                            class="relative w-full aspect-[3/4] bg-seat-booked dark:bg-slate-700/50 rounded-xl border border-slate-300 dark:border-slate-600 flex flex-col items-center justify-center cursor-not-allowed">
                                            <div
                                                class="absolute -top-2 w-3/4 h-3 bg-slate-300 dark:bg-slate-600 rounded-sm">
                                            </div>
                                            <span class="material-icons text-seat-booked-icon text-xl">person_off</span>
                                        </div>
                                    </div>
                                    <button class="seat-btn flex-1 flex flex-col items-center group relative">
                                        <div
                                            class="relative w-full aspect-[3/4] bg-white dark:bg-slate-800 rounded-xl shadow-seat group-hover:shadow-seat-hover transition-all duration-300 border-2 border-seat-available group-hover:bg-green-50 dark:group-hover:bg-green-900/10 flex flex-col items-center justify-center">
                                            <div
                                                class="absolute -top-2 w-3/4 h-3 bg-seat-available rounded-sm shadow-sm">
                                            </div>
                                            <span class="text-seat-available font-bold text-sm mt-1">6</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute top-24 -left-3 w-2 h-10 bg-slate-300 dark:bg-slate-700 rounded-l-lg border-l border-t border-b border-slate-400 dark:border-slate-600">
                        </div>
                        <div
                            class="absolute top-24 -right-3 w-2 h-10 bg-slate-300 dark:bg-slate-700 rounded-r-lg border-r border-t border-b border-slate-400 dark:border-slate-600">
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-6 mt-6 pb-2 w-full">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-md bg-white border-2 border-seat-available shadow-sm"></div>
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Available</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded-md bg-primary shadow-sm border border-blue-600"></div>
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Selected</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-5 h-5 rounded-md bg-seat-booked dark:bg-slate-700 border border-slate-300 dark:border-slate-600">
                        </div>
                        <span class="text-sm font-medium text-slate-500">Booked</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="px-1.5 py-0.5 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-[10px] text-white font-bold">
                            PREMIUM</div>
                        <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Front Seat</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-4 space-y-6">
            <div
                class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800 sticky top-24">
                <h2 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-icons text-primary">receipt_long</span>
                    Booking Summary
                </h2>
                <div id="selected-seats-list" class="space-y-4 mb-6">
                    <p class="text-sm text-slate-400 text-center">No seats selected</p>
                </div>
                <div class="border-t border-slate-100 dark:border-slate-800 pt-4 space-y-2">
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                        <span>Subtotal</span>
                        <span id="subtotal">0 MAD</span>
                    </div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                        <span>Premium Fee (+20%)</span>
                        <span id="premium-fee">0 MAD</span>
                    </div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
                        <span>Booking Fee</span>
                        <span>5 MAD</span>
                    </div>
                </div>
                <div class="border-t border-dashed border-slate-300 dark:border-slate-700 my-4"></div>
                <div class="flex justify-between items-end mb-6">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Total Amount</p>
                        <p class="text-xs text-green-600 font-medium">Pay on arrival available</p>
                    </div>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white"><span id="total-price">0</span> <span
                            class="text-base font-normal text-slate-500 ml-1">MAD</span></p>
                </div>
                <form id="booking-form" method="POST" action="{{ route('bookings.store') }}">
                    @csrf
                    <input type="hidden" name="seat_ids" id="seat-ids-input" value="">
                    <button type="submit" id="confirm-btn" disabled
                        class="w-full bg-slate-400 text-white font-bold py-4 px-6 rounded-lg transition-colors flex items-center justify-center gap-2 cursor-not-allowed">
                        <span>Confirm Booking</span>
                        <span class="material-icons text-sm">arrow_forward</span>
                    </button>
                </form>
                <p class="text-center text-xs text-slate-400 mt-4">
                    By confirming, you agree to our <a class="underline hover:text-primary" href="#">Terms of
                        Service</a>.
                </p>
            </div>
            <div
                class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                <div class="flex gap-2">
                    <input
                        class="flex-grow bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded px-4 text-sm focus:ring-primary focus:border-primary"
                        placeholder="Promo Code" type="text" />
                    <button
                        class="bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 font-medium px-4 rounded transition-colors text-sm">
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const seats = @json($trip->seats);
    const basePrice = {{ $trip->base_price }};
    const seatButtons = document.querySelectorAll('.seat-btn');
    const seatMapping = [1, 2, 3, 6];
    const selectedSeats = [];
    
    seatButtons.forEach((btn, index) => {
        const seatNumber = seatMapping[index];
        const seat = seats.find(s => s.seat_number === seatNumber);
        if (!seat) return;
        
        if (seat.is_booked || seat.status === 'reserved') {
            btn.disabled = true;
            btn.classList.add('opacity-60', 'cursor-not-allowed');
            const innerDiv = btn.querySelector('div[class*="bg-white"], div[class*="bg-primary"]');
            if (innerDiv) {
                innerDiv.classList.remove('bg-white', 'bg-primary', 'border-seat-available', 'border-primary');
                innerDiv.classList.add('bg-slate-300', 'border-slate-400');
            }
        } else {
            btn.setAttribute('data-seat-id', seat.id);
            btn.setAttribute('data-seat-number', seat.seat_number);
            
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const seatId = parseInt(seat.id);
                const idx = selectedSeats.findIndex(s => s.id === seatId);
                const innerDiv = btn.querySelector('div[class*="bg-"]');
                
                if (idx === -1) {
                    selectedSeats.push({id: seatId, number: seat.seat_number});
                    innerDiv?.classList.remove('bg-white', 'border-seat-available');
                    innerDiv?.classList.add('bg-primary', 'border-primary');
                } else {
                    selectedSeats.splice(idx, 1);
                    innerDiv?.classList.remove('bg-primary', 'border-primary');
                    innerDiv?.classList.add('bg-white', 'border-seat-available');
                }
                
                updateBookingSummary();
            });
        }
    });
    
    function updateBookingSummary() {
        const listEl = document.getElementById('selected-seats-list');
        const subtotalEl = document.getElementById('subtotal');
        const premiumFeeEl = document.getElementById('premium-fee');
        const totalEl = document.getElementById('total-price');
        const confirmBtn = document.getElementById('confirm-btn');
        const hiddenInput = document.getElementById('seat-ids-input');
        
        if (selectedSeats.length === 0) {
            listEl.innerHTML = '<p class="text-sm text-slate-400 text-center">No seats selected</p>';
            subtotalEl.textContent = '0 MAD';
            premiumFeeEl.textContent = '0 MAD';
            totalEl.textContent = '0';
            confirmBtn.disabled = true;
            confirmBtn.classList.add('bg-slate-400', 'cursor-not-allowed');
            confirmBtn.classList.remove('bg-primary', 'hover:bg-blue-600', 'shadow-lg');
            return;
        }
        
        let subtotal = 0;
        let premiumFee = 0;
        let html = '';
        
        selectedSeats.forEach(s => {
            const isPremium = s.number === 1 || s.number === 2;
            const price = isPremium ? basePrice * 1.2 : basePrice;
            subtotal += basePrice;
            if (isPremium) premiumFee += basePrice * 0.2;
            
            html += `<div class="flex justify-between items-center p-3 bg-primary/5 rounded-lg border border-primary/10">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-primary text-white flex items-center justify-center font-bold text-sm shadow-md">${s.number}</div>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-medium text-sm">Seat ${s.number}</p>
                            ${isPremium ? '<span class="bg-yellow-100 text-yellow-800 text-[10px] px-1.5 rounded font-bold border border-yellow-200">PREMIUM</span>' : ''}
                        </div>
                    </div>
                </div>
                <p class="font-bold text-primary">${price.toFixed(0)} MAD</p>
            </div>`;
        });
        
        const total = subtotal + premiumFee + 5;
        
        listEl.innerHTML = html;
        subtotalEl.textContent = `${subtotal.toFixed(0)} MAD`;
        premiumFeeEl.textContent = `${premiumFee.toFixed(0)} MAD`;
        totalEl.textContent = total.toFixed(0);
        hiddenInput.value = JSON.stringify(selectedSeats.map(s => s.id));
        
        confirmBtn.disabled = false;
        confirmBtn.classList.remove('bg-slate-400', 'cursor-not-allowed');
        confirmBtn.classList.add('bg-primary', 'hover:bg-blue-600', 'shadow-lg', 'shadow-blue-500/30');
    }
});
</script>

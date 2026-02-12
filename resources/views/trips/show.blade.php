<!DOCTYPE html>
<html>
<head>
    <title>Trip Details</title>
    <style>
        .seat-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            max-width: 400px;
        }
        .seat-btn {
            padding: 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .available {
            background-color: #22c55e;
            color: white;
        }
        .booked {
            background-color: #9ca3af;
            color: white;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <h1>Trip from {{ $trip->departure_city }} to {{ $trip->arrival_city }}</h1>
    <p>Departure: {{ $trip->departure_time }}</p>
    
    <h2>Available Seats</h2>
    <div class="seat-grid">
        @foreach($trip->seats as $seat)
            <form method="POST" action="{{ route('bookings.store') }}">
                @csrf
                <input type="hidden" name="seat_id" value="{{ $seat->id }}">
                
                @if($seat->status === 'reserved')
                    <button type="button" class="seat-btn booked" disabled>
                        Seat {{ $seat->seat_number }} - Booked
                    </button>
                @else
                    <button type="submit" class="seat-btn available">
                        Seat {{ $seat->seat_number }} - ${{ $trip->base_price }}
                    </button>
                @endif
            </form>
        @endforeach
    </div>
</body>
</html>

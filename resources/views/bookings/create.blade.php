@extends('layouts.app')

@section('content')
    <section class="booking-form">
        <h1>Book {{ $room->name }}</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value="{{ $room->id }}">
            <div>
                <label for="customer_name">Name</label>
                <input type="text" name="customer_name" id="customer_name" required>
            </div>
            <div>
                <label for="customer_email">Email</label>
                <input type="email" name="customer_email" id="customer_email" required>
            </div>
            <div>
                <label for="customer_phone">Phone</label>
                <input type="text" name="customer_phone" id="customer_phone" required>
            </div>
            <div>
                <label for="check_in">Check-in Date</label>
                <input type="date" name="check_in" id="check_in" required>
            </div>
            <div>
                <label for="check_out">Check-out Date</label>
                <input type="date" name="check_out" id="check_out" required>
            </div>
            <button type="submit">Confirm Booking</button>
        </form>
    </section>
@endsection
@extends('layouts.app')

@section('content')
    @include('partials.room-details', ['room' => $room])
    <a href="{{ route('bookings.create', $room->id) }}">Book Now</a>
@endsection
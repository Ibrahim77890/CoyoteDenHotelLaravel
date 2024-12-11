@extends('layouts.app')

@section('content')
    <section class="rooms">
        <h1>Rooms</h1>
        <div class="room-list">
            @foreach($rooms as $room)
                @include('partials.room-card', ['room' => $room])
            @endforeach
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('content')

    <article class="h_article" style="justify-content: center; padding: 1% !important; height: 30vh;">
        <div>
            <h1>Services We Provide</h1>
        </div>
    </article>

    <!-- Semantic Hero Section -->
    <section class="h_hero" style="margin-bottom: 5%;">
        <div class="h_hero_first_panel">
            <h1>Hostel vibes, traditional flair</h1>
            <p style="padding-inline: 3%;">Feel at home in our rooms decorated with traditional art, textiles, and knicknacks from all over Pakistan. Our Islamabad hostel has both private rooms and dorms at fair prices.</p>
        </div>

        <div class="h_hero_second_panel">
            <img src="{{ asset('images/room3.jpg') }}" alt="Room Image">
        </div>
    </section>

    <section class="h_contact" style="height: 6vh; padding: 1%; text-align: center;">
        <p style="color: #fcfaf5; font-weight: 600;">Room Rental</p>
    </section>

    <section class="h_rooms">
        @foreach ($rooms as $room)
            <div class="room">
                <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}">
                <div>
                    <p style="color: rgb(71, 188, 87);">{{ strtoupper($room->type) }}</p>
                    <h2>{{ $room->name }}</h2>
                    <p>{{ $room->amenities }}</p>
                    <button>Book Now</button>
                </div>
            </div>
        @endforeach
    </section>

    <section class="h_contact" style="height: 6vh; padding: 1%; text-align: center;">
        <p style="color: #fcfaf5; font-weight: 600;">Bike Rental</p>
    </section>

    <section class="h_rooms">
        @foreach ($bikeServices as $bike)
            <div class="room">
                <img src="{{ asset('images/' . $bike->image) }}" alt="{{ $bike->name }}">
                <div>
                    <p style="color: rgb(71, 188, 87);">{{ $bike->brand ?? 'Bike' }}</p>
                    <h2>{{ $bike->name }}</h2>
                    <p>{{ $bike->description }}</p>
                    <button>Book Now</button>
                </div>
            </div>
        @endforeach
        <div style="display: flex; justify-content: center;">
            <button style="background-color: transparent; color: chocolate; border: 1px solid chocolate;">Show More</button>
        </div>
    </section>

    <section class="h_contact" style="height: 6vh; padding: 1%; text-align: center;">
        <p style="color: #fcfaf5; font-weight: 600;">More Services</p>
    </section>

    <div style="display: flex; flex-direction: column; justify-content: space-around; padding: 10px; gap: 10px; width: 100%; align-items: center;">
        <button style="background-color: transparent; color: chocolate; border: 1px solid chocolate; padding: 10px; border-radius: 5px;" onclick="addService()">Add additional service</button>
        <button style="background-color: transparent; color: chocolate; border: 1px solid chocolate; padding: 10px; border-radius: 5px;" onclick="removeService()">Remove last additional service</button>
    </div>

    <section class="h_services">
        @foreach ($services as $service)
            <div class="service">
                <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->name }}">
                <div>
                    <h2>{{ $service->name }}</h2>
                    <p>{{ $service->description }}</p>
                    <button>Book Now</button>
                </div>
            </div>
        @endforeach
    </section>

    <script src="{{ asset('js/services_script.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
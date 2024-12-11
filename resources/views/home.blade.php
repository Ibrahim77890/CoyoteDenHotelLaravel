@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="h_hero">
        <div class="h_hero_first_panel">
            <h1>Welcome to Coyote Den Hostel</h1>
            <p>Your home away from home</p>
        </div>
        <div class="h_hero_second_panel">
            <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image">
        </div>
    </section>

    <!-- Contact Section -->
    <section class="h_contact">
    <p style="color: #fcfaf5; margin-bottom: -20px; font-weight: 600;">Bookings</p>
                <h1>Book your stay at Coyote Den</h1>
                <p>We do take walk-ins, but we often fill up during high
                    season.
                    Book your stay online, or contact us to inquire about
                    booking your stay at Coyote Den Hostel Islamabad.</p>
        <button>
            <a href="{{ url('/contact') }}">
                Contact Us
            </a>
            <p>></p>
        </button>
    </section>

    <!-- Article Section -->
    <section class="h_article">
        <img src="{{ asset('images/motorcycle.jpg') }}" alt="Article Image">
        <div>
                    <h1>Our Exclusive Service - Motorcycle rental</h1>
                    <p>Looking for a unique way to explore Islamabad?
                        <strong>Coyote
                            Den Hotel</strong> offers an <strong>exclusive
                            motorcycle rental service</strong>, including
                        our
                        famous
                        <strong>truck art motorcycles</strong>. These
                        vibrant,
                        artistically crafted bikes are available only to our
                        guests—nowhere else in the city can you find this
                        service.
                    </p>

                    <p>Whether you're cruising through the city or exploring
                        nearby
                        areas, our motorcycles give you the <strong>freedom
                            and
                            flexibility</strong> to experience Islamabad in
                        style.
                        Book your stay at Coyote Den and embark on an
                        adventure
                        only
                        we can offer!</p>
                </div>
    </section>

    <!-- Gallery Section -->
    <section class="h_gallery">
        <h1>Rooms Pricing and Gallery</h1>
        <h3><i>*Hover images to see the gallery</i></h3>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Type</th>
                        <th>Amenities</th>
                        <th>Price</th>
                        <th>Booking</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->type }}</td>
                            <td>{{ $room->amenities }}</td>
                            <td>${{ number_format($room->price, 2) }}/night</td>
                            <td>
                                <a href="{{ route('rooms.show', $room->id) }}" class="details-button">Show Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="carousel-container">
            <div class="imgi_gallery">
                @foreach ($rooms as $room)
                    <img class="imgi" src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}">
                @endforeach
            </div>
            <button class="prev-btn">❮</button>
            <button class="next-btn">❯</button>
        </div>
    
    </section>
@endsection
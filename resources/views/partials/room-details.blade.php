<div class="room-detail">
    <h1>{{ $room->name }}</h1>
    <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}">
    <p>Type: {{ $room->type }}</p>
    <p>Amenities: {{ $room->amenities }}</p>
    <p>Price: {{ $room->price }}</p>
</div>
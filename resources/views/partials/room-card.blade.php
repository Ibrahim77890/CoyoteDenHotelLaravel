<div class="room">
    <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}">
    <h3>{{ $room->name }}</h3>
    <p>{{ $room->type }}</p>
    <p>{{ $room->price }}</p>
    <a href="{{ route('rooms.show', $room->id) }}">View Details</a>
</div>
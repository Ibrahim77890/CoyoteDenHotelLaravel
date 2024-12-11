<div class="service">
    <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->name }}">
    <h2>{{ $service->name }}</h2>
    <p>{{ $service->description }}</p>
    <a href="{{ route('services.show', $service->id) }}">Learn More</a>
</div>
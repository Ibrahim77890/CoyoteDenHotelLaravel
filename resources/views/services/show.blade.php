@extends('layouts.app')

@section('content')
    <section class="service-detail">
        <h1>{{ $service->name }}</h1>
        <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->name }}">
        <p>{{ $service->description }}</p>
    </section>
@endsection
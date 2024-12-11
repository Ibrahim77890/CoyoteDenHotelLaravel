@extends('layouts.app')

@section('content')
<h1>All Services</h1>

<a href="{{ route('services.create') }}">Create New Service</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="50" height="50">
                    @else
                        No image
                    @endif
                </td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}">Edit</a>

                    <form action="{{ route('services.destroy', $service->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
<h1>Edit Service</h1>

<form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $service->name }}" required>
    <br>

    <label>Description:</label>
    <textarea name="description" required>{{ $service->description }}</textarea>
    <br>

    <label>Image:</label>
    <input type="text" name="image">
    <br>

    <button type="submit">Update Service</button>
</form>

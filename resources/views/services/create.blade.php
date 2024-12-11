@extends('layouts.app')

@section('content')
<h1 style="font-family: Arial, sans-serif; color: #333; text-align: center; margin-bottom: 20px;">Create New Service</h1>

<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 500px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    @csrf
    
    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
    <input type="text" name="name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    
    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Description:</label>
    <textarea name="description" required style="width: 100%; padding: 10px; height: 100px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
    
    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Image:</label>
    <input type="text" name="image" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    
    <button type="submit" style="width: 100%; background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Create Service</button>
</form>
@endsection

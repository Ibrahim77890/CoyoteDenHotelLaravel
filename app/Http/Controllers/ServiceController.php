<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function destroy($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);
        
        // Delete the service
        $service->delete();

        // Redirect back with a success message
        return redirect()->route('service')->with('success', 'Service deleted successfully!');
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',  // Adjust validation as needed
        ]);

        // Find the service by ID
        $service = Service::findOrFail($id);

        // Update the service
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = $request->input('image');
        $service->save();

        // Redirect back or to a specific page after update
        return redirect()->route('service')
            ->with('success', 'Service updated successfully.');
    }



    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);
    
        // Create the new service
        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = $request->input('image'); // Assuming image is just a string (like a URL)
        $service->save();
    
        // Redirect to the services index or show a success message
        return redirect()->route('service')->with('success', 'Service created successfully!');
    }

    public function index()
    {
        // Display a list of all services
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        // Display the details of a single service
        return view('services.show', compact('service'));
    }

    public function create()
    {
        return view('services.create');
    }


    public function edit($id)
    {
        // Fetch the service by its ID
        $service = Service::findOrFail($id);

        // Return the view with the service data
        return view('services.edit', compact('service'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // Display the home page with a list of rooms
        $rooms = Room::take(3)->get(); // Fetch 3 rooms for display
        return view('home', compact('rooms'));
    }

    public function about()
    {
        // Display the about page
        return view('about');
    }

    public function contact()
    {
        // Display the contact page
        return view('contact');
    }


    public function service()
{
    // Fetch rooms and services from the database
    $rooms = Room::all();
    $services = Service::all();

    // Filter bike rental services
    $bikeServices = $services->filter(function ($service) {
        return strpos(strtolower($service->name), 'bike') !== false || strpos(strtolower($service->name), 'motorcycle') !== false;
    });

    // Pass the data to the view
    return view('service', compact('rooms', 'bikeServices', 'services'));
}

}
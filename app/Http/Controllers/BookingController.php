<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Room $room)
    {
        // Show the booking form for a specific room
        return view('bookings.create', compact('room'));
    }

    public function store(Request $request)
    {
        // Validate and store the booking
        $request->validate([
            'room_id'         => 'required|exists:rooms,id',
            'customer_name'   => 'required|string|max:255',
            'customer_email'  => 'required|email|max:255',
            'customer_phone'  => 'required|string|max:20',
            'check_in'        => 'required|date',
            'check_out'       => 'required|date|after:check_in',
        ]);

        Booking::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Your booking has been made successfully.');
    }
}
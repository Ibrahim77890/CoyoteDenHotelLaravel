<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Display a list of all rooms
        $rooms = Room::all();
        echo $rooms;
        return view('rooms.index', compact('rooms'));
    }

    public function show(Room $room)
    {
        // Display the details of a single room
        return view('rooms.show', compact('room'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.view', compact('bookings'));
    }

    public function edit()
    {
        return view('bookings.edit');
    }

    public function update()
    {
        return view('bookings.view');
    }

    public function new()
    {
        $rooms = Room::all();
        return view('bookings.new', compact('rooms'));
    }

    public function store()
    {
        return view('bookings.view');
    }
}

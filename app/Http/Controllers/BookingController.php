<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;
use App\Guest;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bookings = Booking::with('room')->get();
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
        $guests = Guest::all();
        return view('bookings.new', compact('rooms','guests'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'guest_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'checkin_dtime' => 'required',
            'checkout_dtime' => 'required'
        ]);

        $result = Booking::where('checkin_dtime', '<=',$request->checkin_dtime)->where('checkout_dtime', '>=',$request->checkout_dtime)->where('room_id',$request->room_id)->first();
        if(!$result){
            Booking::create($request->all());
            return redirect('bookings/view');
        }

        if (!$validatedData || $result) {
            $rooms = Room::all();
            $guests = Guest::all();
            return view('bookings.new', compact('rooms','guests'))
                ->withErrors($validator)
                ->withInput();
        }

    }
}

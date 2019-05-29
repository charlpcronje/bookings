<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function autocomplete()
    {
        $data = Item::select("first_name,last_name,id_number")
                ->where("first_name","LIKE","%{$request->input('query')}%")
                ->orwhere("last_name","LIKE","%{$request->input('query')}%")
                ->orwhere("id_number","LIKE","%{$request->input('query')}%")
                ->get();

        return response()->json($data);
    }

    public function index()
    {
        $guests = Guest::all();
        return view('guests.view', compact('guests'));
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

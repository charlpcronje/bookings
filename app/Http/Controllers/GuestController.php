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
        return view('guests.edit');
    }

    public function update()
    {
        return view('guests.view');
    }

    public function new()
    {
        return view('guests.new', compact('rooms'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required|unique:guests',
            'mobile' => 'required'
        ]);


        if (!$validatedData) {
            $guests = Guest::all();
            return view('guests.new', compact('guests'))
                ->withErrors($validator)
                ->withInput();
        }

        Guest::create($request->all());
        return redirect('guests/view');
    }
}

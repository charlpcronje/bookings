@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>Rooms</h2>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Room Name</td>
              <td>Room Number</td>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $guest)
            <tr>
                <td>{{$guest->id}}</td>
                <td>{{$guest->room_name}}</td>
                <td>{{$guest->room_number}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

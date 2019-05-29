@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>Bookings</h2>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('bookings/new') }}">NEW</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Room Name</td>
              <td>Check-In</td>
              <td>Check-Out</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->room->room_name}}</td>
                <td>{{$booking->checkin_dtime}}</td>
                <td>{{$booking->checkout_dtime}}</td>
                <td><a href="{{ route('bookings/edit',$booking->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('bookings/delete', $booking->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

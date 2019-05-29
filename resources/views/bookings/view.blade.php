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
              <td>Status</td>
              <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->room->room_name}}</td>
                <td>{{$booking->checkin_dtime}}</td>
                <td>{{$booking->checkout_dtime}}</td>
                <td>
                    <?php
                        if (strtotime($booking->checkin_dtime) <= strtotime(now())) {
                            ?>
                                Checked IN
                            <?php
                        } else {
                            ?>
                                Checked OUT
                            <?php
                        }
                    ?>
                </td>
                <td>
                    <?php
                        if (strtotime($booking->checkin_dtime) <= strtotime(now())) {
                            ?>
                                <a href="{{ route('bookings/checkout','id='.$booking->id)}}" class="btn btn-primary">Check-Out</a>
                            <?php
                        }
                    ?>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

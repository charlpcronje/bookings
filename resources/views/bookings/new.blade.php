@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>New Booking</h2>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('bookings/view') }}">BACK</a>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('bookings/store') }}">
            <div class="form-group">
                @csrf
                <label for="guest_id">Select Guest:</label>
                <input type="text" class="form-control typeahead" name="guest_id"/>
            </div>
            <div class="form-group">
                <label for="room_id">Select Room:</label>
                <select name="room_id" class="form-control">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="checkin_dtime">Check-In Date:</label>
                <input type="datetime-local" value="{{ date('Y-m-d') }}T11:00:00" class="form-control datepicker" name="checkin_dtime"/>
            </div>
            <div class="form-group">
                <label for="checkout_dtime">Check-Out Date:</label>
                <input type="datetime-local" value="{{date('Y-m-d', strtotime('+1 day'))}}T11:00:00" class="form-control datepicker" name="checkout_dtime"/>
            </div>
            <button type="submit" class="btn btn-primary">Add Booking</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    var path = "{{ route('guests/autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection



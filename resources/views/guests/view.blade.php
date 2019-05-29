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
              <td>First name</td>
              <td>Last name</td>
              <td>ID Number</td>
              <td>Telephone</td>
              <td>Mobile</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($guests as $guest)
            <tr>
                <td>{{$guest->id}}</td>
                <td>{{$guest->first_name}}</td>
                <td>{{$guest->last_name}}</td>
                <td>{{$guest->id_number}}</td>
                <td>{{$guest->telephone}}</td>
                <td>{{$guest->mobile}}</td>
                <td><a href="{{ route('guests/edit',$guest->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('guests/delete', $guest->id)}}" method="post">
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

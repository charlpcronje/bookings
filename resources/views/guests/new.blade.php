@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>New Guest</h2>
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
        <form method="post" action="{{ route('guests/store') }}">
            <div class="form-group">
                @csrf
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name"/>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name"/>
            </div>
            <div class="form-group">
                <label for="id_number">ID Number:</label>
                <input type="text" class="form-control" name="id_number"/>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" name="mobile"/>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" class="form-control" name="telephone"/>
            </div>
            <button type="submit" class="btn btn-primary">Add Guest</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    var path = "{{ route('guests/autocomplete') }}";
    $('.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection



@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Teacher Details</h4>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $teachers->name }}</h5>
            <p class="card-text">Email: {{ $teachers->email }}</p>
            <p class="card-text">Address: {{ $teachers->address }}</p>
            <p class="card-text">Contact: {{ $teachers->pnumber }}</p>
            <p class="card-text">Experience: {{ $teachers->experience }}</p>

            <a href="{{ url('teachers') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
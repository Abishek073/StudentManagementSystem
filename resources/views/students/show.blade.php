@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header"><h4>Student Details</h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $students->name }}</h5>
            <p class="card-text">Email: {{ $students->email }}</p>
            <p class="card-text">Address: {{ $students->address }}</p>
            <p class="card-text">Contact: {{ $students->pnumber }}</p>
            <p class="card-text">DOB: {{ $students->dob }}</p>
            <p class="card-text">Father Name: {{ $students->fName }}</p>
           <a href="{{ url('students') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
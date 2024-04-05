@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Enrollment Details</h4>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enroll no: {{ $enrollments->enroll_no }}</h5>
            <p class="card-text">Batch: {{ $enrollments->batch->name }}</p>
            <p class="card-text">Student: {{ $enrollments->student->name}}</p>
            <p class="card-text">Join Date: {{ $enrollments->join_date }}</p>
            <p class="card-text">Fee Date: {{ $enrollments->fee }}</p>


            <a href="{{ url('enrollments') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
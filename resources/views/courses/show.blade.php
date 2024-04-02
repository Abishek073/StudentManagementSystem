@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Course Details</h4>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $courses->name }}</h5>
            <p class="card-text">Syllabus: {{ $courses->syllabus }}</p>
            <p class="card-text">Duration: {{ $courses->duration }}</p>


            <a href="{{ url('courses') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
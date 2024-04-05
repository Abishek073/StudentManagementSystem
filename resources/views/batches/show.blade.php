@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Batch Details</h4>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $batches->name }}</h5>
            <p class="card-text">Course: {{ $batches->course->name }}</p>
            <p class="card-text">Start Date: {{ $batches->start_date }}</p>


            <a href="{{ url('batches') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
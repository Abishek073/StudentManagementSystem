@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Payment Details</h4>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enroll no: {{ $payments->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Date: {{ $payments->created_at->format('Y-m-d ') }}</p>
            <p class="card-text">Amount: {{ $payments->amount }}</p>


            <a href="{{ url('payments') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>
        </div>
    </div>
</div>

@endsection
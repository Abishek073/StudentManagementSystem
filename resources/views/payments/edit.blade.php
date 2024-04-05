@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Update Payment</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('payments/' . $payments->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $payments->id }}" id="id">

      <div class="form-group">
        <label for="">Enroll no</label>
        <input type="text" name="enroll_id" id="enroll_id" value="{{ $payments->enrollment->enroll_no }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Amount</label>
        <input type="text" name="amount" id="amount" value="{{ $payments->amount }}" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
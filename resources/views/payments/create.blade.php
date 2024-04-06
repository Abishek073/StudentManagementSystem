@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Payment List</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('payments') }}" method="post">
      @csrf

      <div class="form-group">
        <label for="">Enrollment no</label>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($enrollments as $id => $enroll_no)
          <option value="{{ $id }}">{{ $enroll_no }}</option>
          @endforeach
        </select>
      </div><br>

      <div class="form-group">
        <label for="">Paid Date</label>
        <input type="text" name="paid_date" id="paid_date" class="form-control">
      </div><br>


      <div class="form-group">
        <label for="">Amount</label>
        <input type="text" name="amount" id="amount" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Add Payment</button>


    </form>
  </div>
</div>

@endsection
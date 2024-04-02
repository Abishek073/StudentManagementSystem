@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Batches</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('batches') }}" method="post">
      @csrf

      <div class="form-group">
        <label for="">Batch Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" name="course_id" id="course_id" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Start Date</label>
        <input type="text" name="start_date" id="start_date" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Add Batch</button>


    </form>
  </div>
</div>

@endsection
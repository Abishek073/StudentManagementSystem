@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Update Batch</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('batches/' . $batches->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $batches->id }}" id="id">

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" name="course_id" id="course_id" value="{{ $batches->course_id }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Start Date</label>
        <input type="text" name="start_date" id="start_date" value="{{ $batches->start_date }}" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
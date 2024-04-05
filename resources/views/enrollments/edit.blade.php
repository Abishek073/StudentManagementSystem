@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Update Enrollment Details</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('enrollments/' . $enrollments->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $enrollments->id }}" id="id">

      <div class="form-group">
        <label for="">Enroll no</label>
        <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Batch</label>
        <input type="text" name="batch_id" id="batch_id" value="{{ $enrollments->batch_id }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Student</label>
        <input type="text" name="student_id" id="student_id" value="{{ $enrollments->student_id }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Join Date</label>
        <input type="text" name="join_date" id="join_date" value="{{ $enrollments->join_date }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Fee</label>
        <input type="text" name="fee" id="fee" value="{{ $enrollments->fee }}" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
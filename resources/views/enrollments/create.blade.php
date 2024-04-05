@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Enrollment Page</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('enrollments') }}" method="post">
      @csrf

      <div class="form-group">
        <label for="">Enroll no</label>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Batch</label>
        <select name="batch_id" id="batch_id" class="form-control">
          @foreach($batches as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
        <!-- <input type="text" name="batch_id" id="batch_id" class="form-control"> -->
      </div><br>

      <div class="form-group">
        <label for="">Student</label>
        <select name="student_id" id="student_id" class="form-control">
          @foreach($students as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
        <!-- <input type="text" name="student_id" id="student_id" class="form-control"> -->
      </div><br>

      <div class="form-group">
        <label for="">Join Date</label>
        <input type="text" name="join_date" id="join_date" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Fee</label>
        <input type="text" name="fee" id="fee" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Add enrollment</button>


    </form>
  </div>
</div>

@endsection
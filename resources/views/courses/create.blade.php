@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Course Page</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('courses') }}" method="post">
      @csrf

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Syllabus</label>
        <input type="text" name="syllabus" id="syllabus" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Duration</label>
        <input type="text" name="duration" id="duration" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Add Course</button>


    </form>
  </div>
</div>

@endsection
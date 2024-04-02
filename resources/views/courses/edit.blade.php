@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Update Course Details</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('courses/' . $courses->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $courses->id }}" id="id">

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Syllabus</label>
        <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Duration</label>
        <input type="text" name="duration" id="duration" value="{{ $courses->duration }}" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
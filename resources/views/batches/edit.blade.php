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
        <label for="">Batch Name</label>
        <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Course</label>
        <select name="course_id" id="course_id" class="form-control">
          @foreach($courses as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
      </div><br>

      <div class="form-group">
        <label for="">Start Date</label>
        <input type="text" name="start_date" id="start_date" value="{{ $batches->start_date }}" class="form-control">
      </div><br>



      <button type="submit" class="btn btn-success px-4">Update</button>

      <a href="{{ url('batches') }}"> <button type="submit" class="btn btn-success px-4">Back</button></a>


    </form>
  </div>
</div>

@endsection
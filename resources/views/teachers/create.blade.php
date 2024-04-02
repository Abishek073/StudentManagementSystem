@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Teacher Page</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('teachers') }}" method="post">
      @csrf

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="email" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" id="address" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Contact</label>
        <input type="text" name="pnumber" id="pnumber" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Experience</label>
        <input type="text" name="experience" id="experience" class="form-control">
      </div><br>

      <button type="submit" class="btn btn-success px-4">Add Student</button>


    </form>
  </div>
</div>

@endsection
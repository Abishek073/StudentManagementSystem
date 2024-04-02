@extends('layout.app')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Update Details</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $teachers->id }}" id="id">

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{ $teachers->name }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="email" value="{{ $teachers->email }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" id="address" value="{{ $teachers->address }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Contact</label>
        <input type="text" name="pnumber" id="pnumber" value="{{ $teachers->pnumber }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Experience</label>
        <input type="text" name="experience" id="experience" value="{{ $teachers->experience }}" class="form-control">
      </div><br>

      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
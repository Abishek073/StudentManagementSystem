@extends('layout.app')
@section('content')



<div class="card">
  <div class="card-header">
    <h4>Update Details</h4>
  </div>
  <div class="card-body">

    <form action="{{ url('students/' . $students->id) }}" method="post">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $students->id }}" id="id">

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="email" value="{{ $students->email }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Contact</label>
        <input type="text" name="pnumber" id="pnumber" value="{{ $students->pnumber }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">DOB</label>
        <input type="text" name="dob" id="dob" value="{{ $students->dob }}" class="form-control">
      </div><br>

      <div class="form-group">
        <label for="">Father Name</label>
        <input type="text" name="fname" id="fname" value="{{ $students->fName }}" class="form-control">
      </div><br>

      <button type="submit" class="btn btn-success px-4">Update</button>


    </form>
  </div>
</div>

@endsection
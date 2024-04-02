@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header"><h4>Student Page</h4></div>
    <div class="card-body">

    <form action="{{ url('students') }}" method="post">
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
         <label for="">DOB</label>
       <input type="text" name="dob" id="dob" class="form-control">
       </div><br>

       <div class="form-group">
         <label for="">Father Name</label>
       <input type="text" name="fname" id="fname" class="form-control">
       </div><br>

       <button type="submit" class="btn btn-success px-4">Add Student</button>


    </form>
    </div>
</div>

@endsection
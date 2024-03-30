
@extends('layout.app')
@section('content')

<div class="container" >
    <div class="row">
        <div class="col-md-9 ">
            <div class="card">
                <h2>Student List</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>DOB</th>
                    <th>Father Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->pnumber }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>
                            <a href="{{ url('/student/'. $student->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/student/'. $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/student' . '/' . $student->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dnager btn-sm" title="Delete Student" ><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
                        </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout.app')
@section('content')

@if(session()->has('flash_message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

    {{session()->get('flash_message')}}

</div>

@endif

<div class="card">
    <div class="card-header">
        <h4>Student List</h4>
    </div>

    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover" style="width: 130%;">
                <thead style="text-align: center;">
                    <tr>
                        <th>Sno.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>DOB</th>
                        <th>Father Name</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->pnumber }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->fName }}</td>
                        <td>{{ $student->created_at ? $student->created_at->format('Y-m-d ') : '' }}</td>
                        <td>{{ $student->created_at ? $student->updated_at->format('Y-m-d ') : '' }}</td>
                        <td>
                            <a href="{{ url('/students/' . $student->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/students' . '/' . $student->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" id="deleteButton"><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById("deleteButton").addEventListener("click", function() {
            // Display confirmation dialog
            var confirmDelete = confirm("Are you sure you want to delete this item?");

            // If user confirms deletion, proceed with deletion
            if (confirmDelete) {
                // Code to delete the item goes here
                alert("Item deleted successfully!");
            } else {
                // If user cancels deletion, do nothing
                alert("Deletion cancelled!");
            }
        });
    </script>


    @endsection
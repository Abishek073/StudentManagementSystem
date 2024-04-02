@extends('layout.app')
@section('content')



<div class="card">
    <div class="card-header">
        <h4>Teacher List</h4>
    </div>

    <div class="card-body">
        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New teacher">
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
                        <th>Experience</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>{{ $teacher->pnumber }}</td>
                        <td>{{ $teacher->experience }}</td>
                        <td>{{ $teacher->created_at ? $teacher->created_at->format('Y-m-d ') : '' }}</td>
                        <td>{{ $teacher->created_at ? $teacher->updated_at->format('Y-m-d ') : '' }}</td>
                        <td>
                            <a href="{{ url('/teachers/' . $teacher->id) }}" title="View teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/teachers/' . $teacher->id . '/edit') }}" title="Edit teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/teachers' . '/' . $teacher->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" id="deleteButton"><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
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
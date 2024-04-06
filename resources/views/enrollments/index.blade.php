@extends('layout.app')
@section('content')



<div class="card">
    <div class="card-header">
        <h4>Enrollments List</h4>
    </div>

    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New enrollment">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover" style="width: 130%;">
                <thead style="text-align: center;">
                    <tr>
                        <th>Sno.</th>
                        <th>Enroll no</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $enrollment)
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $enrollment->enroll_no }}</td>
                        <td>{{ $enrollment->batch->name}}</td>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->join_date }}</td>
                        <td>{{ $enrollment->fee }}</td>
                        <td>
                            <a href="{{ url('/enrollments/' . $enrollment->id) }}" title="View enrollment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/enrollments/' . $enrollment->id . '/edit') }}" title="Edit enrollment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/enrollments' . '/' . $enrollment->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete enrollment" id="deleteButton"><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
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
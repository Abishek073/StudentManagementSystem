@extends('layout.app')
@section('content')



<div class="card">
    <div class="card-header">
        <h4>Batch List</h4>
    </div>

    <div class="card-body">
        <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New batch">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover" style="width: 100%;">
                <thead style="text-align: center;">
                    <tr>
                        <th>Sno.</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $batch)
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->course->name}}</td>
                        <td>{{ $batch->start_date }}</td>
                        <td>
                            <a href="{{ url('/batches/' . $batch->id) }}" title="View batch"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/batches/' . $batch->id . '/edit') }}" title="Edit batch"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/batches' . '/' . $batch->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete batch" id="deleteButton"><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
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
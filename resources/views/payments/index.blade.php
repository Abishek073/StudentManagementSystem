@extends('layout.app')
@section('content')



<div class="card">
    <div class="card-header">
        <h4>Payment List</h4>
    </div>

    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New batch">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-hover" style="width: 100%;">
                <thead style="text-align: center;">
                    <tr>
                        <th>Sno.</th>
                        <th>Enroll no</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->enrollment->enroll_no}}</td>
                        <td>{{ $payment->created_at->format('Y-m-d ')   }}</td>
                        <td>{{ $payment->amount }}</td>


                        <td>
                            <a href="{{ url('/payments/' . $payment->id) }}" title="View payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>

                            <a href="{{ url('/payments/' . $payment->id . '/edit') }}" title="Edit payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form action="{{ url('/payments' . '/' . $payment->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete payment" id="deleteButton"><i class="fa fa-trash-o " aria-hidden="true"></i>Delete</button>
                            </form>
                            <a href="{{ url('/report/report1/' . $payment->id ) }}" title="Print Payment"><button class="btn btn-success btn-sm"><i class="fa fa-print" aria-hidden="true"></i>Print</button></a>
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
@extends('layouts.admin')

@section('content')
    <h2>Expense List</h2>
    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>

                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
            <tr>
                <td>{{ $expense->id }}</td>
                <td>{{ $expense->category }}</td>

                <td>{{ $expense->description }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->date }}</td>

                <td> <a href="">Edit</a> || <a href="">Delete</a> </td>

            </tr>

            @endforeach

        </tbody>
    </table>

    <!-- Pagination links -->
    {{ $expenses->links() }}
@endsection

@section('script')
<script>
    jQuery(document).ready(function($) {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ],
        });

    });
</script>

@endsection

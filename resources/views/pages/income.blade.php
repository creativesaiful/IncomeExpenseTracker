@extends('layouts.admin')

@section('content')
    <h2>Income List</h2>
    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($incomes as $income)
            <tr>
                <td>{{ $income->id }}</td>
                <td>{{ $income->category }}</td>
                <td>{{ $income->amount }}</td>
                <td>{{ $income->description }}</td>
                <td>{{ $income->date }}</td>
                <td> <a href="">Edit</a> || <a href="">Delete</a> </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $incomes->links() }}
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

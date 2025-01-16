@extends('layout')
@section('content')
<style>
 .btn-print {
    background-color: #27ae60;
    border: none;
    font-size: 14px; /* Ukuran font lebih kecil */
    font-weight: 400; /* Menurunkan bobot font */
    padding: 8px 15px; /* Mengurangi padding agar tombol lebih kecil */
}

.btn-print:hover {
    background-color: #2ecc71;
}

</style>
    <div class="card">
        <div class="card-header">
            <h2>Payments</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <th>Paid Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $item->enrollment->enroll_no }}</td> --}}
                                <td>{{ $item->enrollment ? $item->enrollment->enroll_no : 'No Enrollment' }}</td>

                                <td>{{ \Carbon\Carbon::parse($item->paid_date)->format('d-m-Y') }}</td>
                                {{-- <td>{{ $item->paid_date }}</td> --}}
                                <td>{{ $item->amount }}</td>

                                <td>
                                    <a href="{{ url('/payments/' . $item->id) }}" title="View Payment"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            View</button></a>
                                    <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            Edit</button></a>

                                    <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Delete</button>
                                    </form>

                                    {{-- <a href="{{ url('report/report1/' . $item->id) }}" title="Edit Payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a> --}}
                                    <a href="{{ url('report/report1/' . $item->id) }}" title="Print Payment">
                                        <button class="btn-print btn-success">
                                            <i class="fa fa-print" aria-hidden="true"></i> Print
                                        </button>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

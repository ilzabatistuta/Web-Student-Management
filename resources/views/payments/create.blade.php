@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Payments</div>
        <div class="card-body">

            <form action="{{ url('payments') }}" method="post">
                {!! csrf_field() !!}
                <label>Enrollment No</label></br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}"> {{ $enroll_no }}</option>
                    @endforeach
                </select>
                <br>

                <label>Paid Date</label></br>
                <input type="text" name="paid_date" id="paid_date" class="form-control" placeholder="DD-MM-YYYY"><br>

                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

    {{-- format date --}}
    <!-- Tambahkan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Tambahkan jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


    <script>
        $(function() {
            $('#paid_date').datepicker({
                dateFormat: 'dd-mm-yy', // Format tanggal DD-MM-YYYY
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>

@stop

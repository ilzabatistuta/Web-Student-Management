@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">

            <form action="{{ url('enrollments') }}" method="post">
                {!! csrf_field() !!}
                <label>Enroll No</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

                <label>Batch</label></br>
                <select name="batch_id" id="batch_id" class="form-control">
                    @foreach ($batches as $id => $name)
                        <option value="{{ $id }}"> {{ $name }}</option>
                    @endforeach
                </select>
                <br>

                <label>Student</label></br>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $id => $name)
                        <option value="{{ $id }}"> {{ $name }}</option>
                    @endforeach
                </select>
                <br>

                <label>Join Date</label></br>
                <input type="text" name="join_date" id="join_date" class="form-control" placeholder="DD-MM-YYYY"><br>


                <label>Fee</label></br>
                <input type="text" name="fee" id="fee" class="form-control"></br>


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
        $('#join_date').datepicker({
            dateFormat: 'dd-mm-yy', // Format tanggal (DD-MM-YYYY)
            autoclose: true,
            todayHighlight: true
        });
    });
    
</script>

@stop

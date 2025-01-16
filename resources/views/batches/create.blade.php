@extends('layout')
@section('content')
<style>
    .form-control {
        width: 100%; /* Lebar penuh dalam container form */
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    
</style>
    <div class="card">
        <div class="card-header">Batches</div>
        <div class="card-body">

            <form action="{{ url('batches') }}" method="post">
                {!! csrf_field() !!}
                <label>Batch Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>

                <label>Course</label></br>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}"> {{ $name }} </option>
                    @endforeach
                </select>
                <br>


                <label>Start Date</label></br>
                <input type="text" name="start_date" id="start_date"
                    class="form-control datepicker  placeholder="dd-mm-yyyy"></br>
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

    <!-- Konfigurasi Datepicker dengan Format Indonesia -->
    <script>
        $(function() {
            // Terapkan Datepicker dengan format dd-mm-yy (d-m-Y)
            $("#start_date").datepicker({
                dateFormat: "dd-mm-yy", // Format tanggal Indonesia
                changeMonth: true, // Menampilkan dropdown untuk bulan
                changeYear: true // Menampilkan dropdown untuk tahun
            });
        });
    </script>


@stop

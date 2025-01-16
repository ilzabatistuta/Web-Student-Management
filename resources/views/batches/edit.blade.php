@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('batches/' . $batches->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $batches->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"></br>

                <label>Course</label></br>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}" {{ $batches->course_id == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
                <br>
                {{--
                <label>Start Date</label></br>
                <input type="text" name="start_date" id="start_date" value="{{ $batches->start_date }}"
                    class="form-control"></br> --}}

                <label>Start Date</label></br>
                <input type="text" name="start_date" id="start_date"
                    value="{{ \Carbon\Carbon::parse($batches->start_date)->format('d-m-Y') }}" class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>

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

@extends('layout')
@section('content')
<style>
    .form-control {
        width: 100%; /* Lebar penuh dalam container form */
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }
    </style>
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('courses/' . $courses ->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $courses->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control"></br>
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}"
                    class="form-control"></br>
                <label>Duration</label></br>
                <input type="text" name="duration" id="duration" value="{{ $courses->duration }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

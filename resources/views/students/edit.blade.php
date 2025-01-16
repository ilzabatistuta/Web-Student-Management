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

            <form action="{{ url('students/' . $students->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <input type="hidden" name="id" id="id" value="{{ $students->id }}" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $students->address }}"
                    class="form-control"></br>
                <label>Mobile Phone</label></br>
                <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}"
                    class="form-control"></br>

                <label>Photo</label></br>
                @if ($students->photo)
                    <img src="{{ asset('storage/' . $students->photo) }}" alt="Student Photo" width="100"><br><br>
                @endif
                <input type="file" name="photo" id="photo" class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

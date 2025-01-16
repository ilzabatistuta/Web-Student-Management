@extends('layout')
@section('content')

<style>
    /* Container utama untuk tata letak */
    .teacher-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    /* Kolom teks */
    .teacher-details {
        flex: 1;
    }

    .card-title,
    .card-text {
        color: white; /* Mengubah teks menjadi putih */
    }

    .card-title {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    /* Kolom foto */
    .teacher-photo {
        flex: 0.4;
        text-align: center;
    }

    .photo-preview {
        max-width: 100%;
        height: auto;
        border: 2px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .photo-placeholder {
        color: gray;
        font-style: italic;
        font-size: 1.2em;
    }

    /* Styling tambahan untuk card */
    .card-body {
        background-color: #34495e; /* Warna latar belakang card */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <div class="teacher-container">
            <!-- Kolom Teks -->
            <div class="teacher-details">
                <h5 class="card-title">Name: {{ $teachers->name }}</h5>
                <p class="card-text">Address: {{ $teachers->address }}</p>
                <p class="card-text">Mobile: {{ $teachers->mobile }}</p>
            </div>

            <!-- Kolom Foto -->
            <div class="teacher-photo">
                @if ($teachers->photo)
                    <img src="{{ asset('storage/' . $teachers->photo) }}" alt="Teacher Photo" class="photo-preview">
                @else
                    <span class="photo-placeholder">No Photo</span>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

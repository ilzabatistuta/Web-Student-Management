@extends('layout')
@section('content')

<style>
    /* Container utama untuk tata letak */
    .course-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    /* Kolom teks */
    .course-details {
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

    /* Styling tambahan untuk card */
    .card-body {
        background-color: #34495e; /* Warna latar belakang card */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <div class="course-container">
            <!-- Kolom Teks -->
            <div class="course-details">
                <h5 class="card-title">Name: {{ $courses->name }}</h5>
                <p class="card-text">Syllabus: {{ $courses->syllabus }}</p>
                <p class="card-text">Duration: {{ $courses->duration() }}</p>
            </div>
        </div>
    </div>
</div>

@endsection

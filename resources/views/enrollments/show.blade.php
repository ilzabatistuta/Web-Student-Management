@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Enrollments Page</div>
        <div class="card-body">
            <div class="enrollment-container">
                <!-- Kolom Teks -->
                <div class="enrollment-details">
                    <h5 class="card-title">Enrollment Number: {{ $enrollments->enroll_no }}</h5>
                    <p class="card-text">Batch: {{ $enrollments->batch->name }}</p>
                    <p class="card-text">Student: {{ $enrollments->student->name }}</p>
                    <p class="card-text">Join Date: {{ \Carbon\Carbon::parse($enrollments->join_date)->format('d-m-Y') }}</p>
                    <p class="card-text">Fee: {{ $enrollments->fee }}</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Container utama untuk tata letak */
        .enrollment-container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 20px;
        }

        /* Kolom teks */
        .enrollment-details {
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

@endsection

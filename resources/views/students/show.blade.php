@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="student-container">
                <!-- Kolom Teks -->
                <div class="student-details">
                    <h5 class="card-title">Name: {{ $students->name }}</h5>
                    <p class="card-text">Address: {{ $students->address }}</p>
                    <p class="card-text">Mobile: {{ $students->mobile }}</p>
                </div>

                <!-- Kolom Foto -->
                <div class="student-photo">
                    @if ($students->photo)
                        <img src="{{ asset('storage/' . $students->photo) }}" alt="Student Photo" class="photo-preview">
                    @else
                        <span class="photo-placeholder">No Photo</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Container utama untuk tata letak */
        .student-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        /* Kolom teks */
        .student-details {
            flex: 1;
        }

        .card-title,
        .card-text {
            color: white; /* Mengubah teks menjadi putih */
        }
    
        .card-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        /* Kolom foto */
        .student-photo {
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

    </style>

@endsection

@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Payments</div>
        <div class="card-body">
            <div class="payment-container">
                <!-- Kolom Teks -->
                <div class="payment-details">
                    <h5 class="card-title">Enroll No: {{ $payments->enrollment->enroll_no }}</h5>
                    <p class="card-text">Paid Date: {{ \Carbon\Carbon::parse($payments->paid_date)->format('d-m-Y') }}</p>
                    <p class="card-text">Amount: {{ $payments->amount }}</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Container utama untuk tata letak */
        .payment-container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 20px;
        }

        /* Kolom teks */
        .payment-details {
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

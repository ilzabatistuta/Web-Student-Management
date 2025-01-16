@extends('layout')

@section('content')
<div class="container mt-5">
<style>
    /* Styling for the Cards */
.card {
    border: none; /* Remove default card border */
    border-radius: 10px; /* Rounded corners for a modern look */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
}

/* Card Header */
.card-header {
    font-size: 18px; /* Increase the size of the header */
    font-weight: bold;
    text-transform: uppercase; /* Make the text uppercase */
    letter-spacing: 1px; /* Add space between letters for a clean look */
    background-color: rgba(0, 0, 0, 0.1); /* Light background for the header */
    color: #fff; /* White text color for header */
}

/* Card Body */
.card-body {
    padding: 20px;
    background-color: #ffffff; /* White background for the body */
    color: #333; /* Dark text color for better readability */
}

/* Card Title (Value) */
.card-title {
    font-size: 36px; /* Larger text for values */
    font-weight: bold;
    color: #000000; /* White color for the title */
    margin-bottom: 15px; /* Space below the title */
}

/* Card Text */
.card-text {
    font-size: 14px; /* Smaller font size for description */
    color: #777; /* Lighter text color for description */
}

/* Hover effect for the cards */
.card:hover {
    transform: translateY(-5px); /* Lift the card up slightly */
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1); /* Add subtle shadow for depth */
}

/* Custom Colors for the Card Backgrounds */
.bg-info {
    background-color: #06b9d4 !important; /* Info card background */
}

.bg-danger {
    background-color: #dc3545 !important; /* Danger card background */
}

/* Responsive Styling for Smaller Screens */
@media (max-width: 767px) {
    .card-body {
        padding: 15px; /* Adjust padding for mobile devices */
    }

    .card-title {
        font-size: 28px; /* Adjust title size for smaller screens */
    }

    .card-text {
        font-size: 12px; /* Adjust description size for smaller screens */
    }
}

</style>
    <!-- Jumbotron -->
    <div class="jumbotron text-center mt-4">
        <h1 class="display-4">Welcome to the Student Management System!</h1>
        <p class="lead">Easily manage students, teachers, courses, and more using the navigation menu.</p>
        <hr class="my-4">
        <p>Get started by selecting an option from the menu or explore the system features below.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/students') }}" role="button">
            <i class="bi bi-person-lines-fill"></i> View Students
        </a>
    </div>

    <!-- Cards for Overview -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Total Students</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $studentsCount }}</h5>
                    <p class="card-text">Number of students enrolled in the system.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Total Teachers</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $teachersCount }}</h5>
                    <p class="card-text">Number of teachers available in the system.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Student and Teacher Overview</h3>
            <canvas id="overviewChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2024 Student Management System | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('overviewChart').getContext('2d');
    var overviewChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Students', 'Teachers'],
            datasets: [{
                label: 'Count',
                data: [{{ $studentsCount }}, {{ $teachersCount }}],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(255, 99, 132, 0.6)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'easeInOutQuad',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection

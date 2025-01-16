<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Web Enterprise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->

            <div class="col-md-3 col-lg-2 p-0">
                <div class="sidebar">
                    <img src="{{ asset('images/logo_mercubuana.png') }}" alt="Logo Mercubuana">
                
                    <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="{{ route('students.index') }}" class="{{ Request::is('students*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> Student
                    </a>
                    <a href="{{ route('teachers.index') }}" class="{{ Request::is('teachers*') ? 'active' : '' }}">
                        <i class="fas fa-chalkboard-teacher"></i> Teacher
                    </a>
                    <a href="{{ route('courses.index') }}" class="{{ Request::is('courses*') ? 'active' : '' }}">
                        <i class="fas fa-book"></i> Courses
                    </a>
                    <a href="{{ route('batches.index') }}" class="{{ Request::is('batches*') ? 'active' : '' }}">
                        <i class="fas fa-layer-group"></i> Batches
                    </a>
                    <a href="{{ route('enrollments.index') }}" class="{{ Request::is('enrollments*') ? 'active' : '' }}">
                        <i class="fas fa-clipboard-list"></i> Enrollment
                    </a>
                    <a href="{{ route('payments.index') }}" class="{{ Request::is('payments*') ? 'active' : '' }}">
                        <i class="fas fa-credit-card"></i> Payment
                    </a>
                </div>
                
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Header with Search Bar and Profile -->
                <div class="header">
                    <div class="header-title d-flex align-items-center">
                        <!-- Foto dan Teks Student Management -->
                        <span>Student Management</span>
                    </div>
                    <div class="profile-logo">
                        <img src="https://via.placeholder.com/40" alt="Profile">
                        <span>John Doe</span>
                    </div>
                </div>

                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>

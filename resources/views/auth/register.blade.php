<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Import fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }


        /* Main container styling */
        .container {
            position: relative;
            max-width: 450px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
        }

        h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .alert {
            width: 100%;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .form-label {
            font-size: 16px;
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .form-control {
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            width: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('{{ asset('images/mercu.png') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #2c3e50;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Posisikan elemen di tengah layar */
            padding: 20px;
            position: relative;
        }

        .form-control:focus {
            border-color: #27ae60;
            box-shadow: 0 0 5px rgba(39, 174, 96, 0.5);
        }

        .btn-primary {
            background-color: #27ae60;
            border: none;
            font-size: 16px;
            font-weight: 600;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2ecc71;
            transform: scale(1.05);
        }

        p.text-center {
            font-size: 14px;
            margin-top: 20px;
            color: #34495e;
        }

        a {
            color: #27ae60;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background-image"></div>

    <div class="container">
        <h2 class="text-center">Register</h2>

        <!-- Display Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <p class="text-center mt-3">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </p>
    </div>
</body>
</html>

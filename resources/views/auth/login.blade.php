
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Import fonts */
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        /* Logo di kanan atas */
        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px; /* Sesuaikan ukuran logo */
        }

        .container {
            max-width: 450px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparan */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            font-size: 32px;
            color: #34495e;
            font-weight: 700;
            margin-bottom: 30px;
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
            color: #34495e;
            margin-top: 20px;
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

    <!-- Logo di kanan atas -->
    <img src="{{ asset('images/logo_mercubuana.png') }}" alt="Logo Mercubuana" class="logo">

    <div class="container">
        <h2>Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p class="text-center">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </p>
    </div>

</body>
</html>

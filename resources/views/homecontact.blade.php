<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('/images/logo_mercubuana.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="lib/fontawesome-free-6.0.0-web/css/all.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,900;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10000;
            width: 100%;
            padding: 40px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.5s;
            background-color: #2596be;
        }

        header.sticky {
            background-color: #fff;
            padding: 10px 100px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        }

        header img {
            height: 50px;
        }

        header .navigation {
            position: relative;
            display: flex;
        }

        header .navigation li {
            list-style-type: none;
            margin-left: 30px;
        }

        header .navigation li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
        }

        header .navigation li a:hover {
            color: #ff9000;
            transition: 0.5s;
        }

        header.sticky .navigation li a {
            color: #111;
        }

        header.sticky .navigation li a:hover {
            color: #029f1d;
        }

        /* contact */
        #contact {
            padding: 50px 0;
            background-color: #efefef;
        }

        .form-control {
            border: none !important;
        }

        .info-box {
            background-color: #fff;
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .info-box .fa-solid,
        .info-box .fa-brands {
            color: #ff9000;
            margin: 3px;
            cursor: pointer;
        }

        #contact {
            padding-top: 150px;
        }

        .container {
            margin-bottom: 40px;
        }

        /* footer */
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .copyright {
            justify-content: center;
            align-items: center;
            padding: 10px 40px;
            text-align: center;
            background-color: #111;
        }

        .copyright p {
            color: #fff;
        }

        .copyright a {
            text-decoration: none;
            color: #2596be;
            font-weight: 600;
        }

        /* Feedback message */
        #feedback-message {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            display: none;
        }

        .info-box a {
            margin: 0 10px; /* Jarak antar ikon */
            text-decoration: none; /* Menghilangkan garis bawah tautan */
            font-size: 24px; /* Ukuran awal ikon */
            color: #000; /* Warna ikon (sesuaikan sesuai tema Anda) */
            transition: transform 0.3s ease, color 0.3s ease; /* Animasi saat hover */
        }

        .info-box a:hover {
            transform: scale(1.5); /* Memperbesar ikon saat hover */
            color: #ff4500; /* Warna ikon saat hover (ubah sesuai keinginan) */
        }

        .info-box i {
            display: inline-block; /* Untuk memastikan ikon terlihat dengan baik */
        }

    </style>
</head>

<body>
    <header>
        <a href="{{ url('homeuser') }}" class="logo">
            <img src="assets/logo_mercubuana.png" alt="logo">
        </a>
        <div class="menuToggle" onclick="menuToggle()"></div>
        <nav>
            <ul class="navigation">
                <li><a href="{{ url('homeuser') }}">Home</a></li>
                <li><a href="{{ url('homeuser') }}">Profile Sekolah</a></li>
                <li><a href="{{ url('homeuser') }}">Berita</a></li>
                <li><a href="{{ url('homeuser') }}">Prestasi</a></li>
                <li><a href="{{ url('homecontact') }}">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- contact us-->
    <section id="contact">
        <div class="container">
            <h1>Kontak Kami</h1>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="400">
                    <form id="contact-form">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Input Name" required>
                        </div><br>
                        <div class="form-group">
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Input No.Handphone" required>
                        </div><br>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" required>
                        </div><br>
                        <div class="form-group">
                            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Input Komentar" class="form-control" style="resize: none;" required></textarea>
                        </div><br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <div id="feedback-message">Terima kasih! Formulir Anda telah berhasil dikirim.</div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="400">
                    <div class="info-box">
                        Address : <i class="fa-solid fa-location-dot"></i> Jl. Mutiara, RT.18/RW.5, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10220
                    </div>
                    <div class="info-box">
                        Phone : <i class="fa-solid fa-phone"></i> 08123456789
                    </div>
                    <div class="info-box">
                        Email : <i class="fa-solid fa-mail-bulk"></i> mercubuana@university.ac.id
                    </div>
                    <div class="info-box">
                        Get Social :
                        <a href="https://www.instagram.com/flerishere/?hl=en" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@fler.is.heree" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="copyright">
            <p>Copyright @2023
                <a href="https://www.instagram.com/iicaadsyd_/" target="_blank">Created by Mochammad Irsyad Kurniawan</a>
                . All Right Reserved
            </p>
        </div>
    </footer>

    <!-- end of footer -->

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        // button toggle
        function menuToggle() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');

            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }

        // Form Submission Feedback
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent page refresh on form submit

            // Show feedback message
            const feedbackMessage = document.getElementById('feedback-message');
            feedbackMessage.style.display = 'block';

            // Optionally, you can reset the form after submission
            document.getElementById('contact-form').reset();
        });
    </script>
</body>

</html>

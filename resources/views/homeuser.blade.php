<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('/images/logo_mercubuana.png') }}">
    <img src="" alt="">
    <title>Website Mercubuana University</title>
    {{-- <link rel="stylesheet" href="{{ asset('/css/user/styles.css') }}"> --}}

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

p {
    font-weight: 300;
    color: #111;
}

body {
    min-height: 1000px;
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
    /* color: #2596be; */
    /* color: #111; */
    font-weight: 500;
}

header .navigation li a:hover {
    color: #ff9000;
    /* color: #2596be; */
    /* color: #029f1d; */
    transition: 0.5s;
}

header.sticky .navigation li a {
    color: #111;
}

header.sticky .navigation li a:hover {
    color: #029f1d;
    transition: 0.5s;
    /* color: #2596be; */
    /* #029f1d */
}

/* End of Header */


/* Landing Page */
.banner {
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url("{{ asset('images/mercu.png') }}");
    background-size: cover;
    background-position: center;
}

.banner .content {
    max-width: 900px;
    /* max-width : 900-1000px*/
    text-align: center;
}

.banner .content h2 {
    font-size: 5em;
    color: #fff;
    line-height: 75px;
}

.banner .content p {
    font-size: 1em;
    color: #fff;
}

.banner .content .btn {
    font-size: 20px;
    color: #fff;
    /* background-color: #029f1d; */
    background-color: #2596be;
    /* background-color: #ff9000; */
    display: inline-block;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 5px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
}

.banner .content .btn:hover {
    letter-spacing: 7px;
}

/* End of Landing Page */


section {
    padding: 100px;
}

/* profile */
.prof img {
    transition: transform 0.5s ease-in-out;
}
/* Animasi transisi ketika transform diterapkan */

.prof img:hover,
.prof img:active {
    transform: scale(1.1);
}

.box {
    transition: transform 0.3s ease-in-out;
}

.box:hover,
.box:active {
    transform: scale(1.1);
}

.row {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.row .col50 {
    position: relative;
    width: 48%;
}

.title-text {
    color: #111;
    font-size: 2em;
    font-weight: 600;
}

.row .col50 .imgbox {
    position: relative;
    width: 100%;
    height: 100%;
}

.row .col50 .imgbox img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* end of profile */


/* class berita */
#berita .title-class h2 {
    font-size: 45px;
}
.class .title-class {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.class .content {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.class .content .box {
    width: 340px;
    margin: 20px;
    border: 15px solid #fff;
    box-shadow: 0 5px 20px rgb(0 0 0 /30%);
}

.class .content .box .imgbox {
    position: relative;
    width: 100%;
    height: 300px;
}

.class .content .box .imgbox img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.class .content .box .box2 img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.class .content .box .text {
    padding: 15px 0 15px;
}

.class .content .box .text h3 {
    color: #111;
    text-align: center;
    font-weight: 700;
}

.class .title-class .btn {
    font-size: 1em;
    color: #fff;
    background-color: #ff9000;
    display: inline-block;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 5px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
}

.class .title-class .btn:hover {
    letter-spacing: 7px;
}
/* end of berita */


/* prestasi */
.expert .title {
    text-align: center;
}

.expert .content {

    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    margin-top: 70px;
}

/* end of prestasi */


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
    /* margin-top: 2px; */
    padding-top: 170px;
}

/* section#contact {
    height: 100vh;
} */
/* end of contact */

/* footer */

footer {
    /* position: fixed; */
    left: 0;
    bottom: 0;
    width: 100%;
}

.copyright {
    padding: 10px 40px;
    text-align: center;
    background-color: #111;
}

.copyright p {
    color: #fff;
}

.copyright a {
    color: #2596be;
    /* font-weight: 100; */
    text-decoration: none;
    font-weight: 600;

}
/* end of footer */



/* mobile resize */
@media(max-width:991px) {

    /* header */
    header,
    header.sticky {
        padding: 10px 20px;
    }

    /* filter invert */
    header.sticky .menuToggle {
        filter: invert(1);
        /* untuk membalikkan nilai negatif
        warna dasar putih dibalik jadi warna hitam */
    }

    header .navigation {
        display: none;
    }

    /* Munculkan menu setelah active */
    header .navigation.active {
        width: 100%;
        height: calc(100% - 70px);
        /* calc artinya kita bisa menggunakan operator aritmatika didalamahnya
        kali , bagi , kurang, tambah dll */
        background-color: #fff;
        position: fixed;
        top: 70px;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    header .navigation li {
        margin-left: 0;
    }

    header .navigation li a {
        color: #111;
        font-size: 2em;
    }

    /* munculkan menutoggle */
    .menuToggle {
        position: relative;
        height: 40px;
        width: 40px;
        background-image: url(assets/menu.png);
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
        cursor: pointer;
        margin-left: auto;
    }

    /* munculkan button exit */
    .menuToggle.active {
        background-image: url(assets/close.png);
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .banner .content h2 {
        font-size: 3em;
    }

    /* about us */
    section {
        padding: 40px;
    }

    .row {
        flex-direction: column;
    }

    .row .col50 {
        position: relative;
        width: 100%;
    }

    .row .col50 .title-text,
    .row .col50 p {
        text-align: center;
    }

    .row .col50 .imgbox {
        position: relative;
        width: 100%;
        height: 350px;
        margin-top: 20px;
    }
}

@media(max-width:480px) {
    .banner .content h2 {
        font-size: 2em;
    }

    .row .col50 .imgbox img {
        background-position: center;
    }
}

/* Gaya untuk Tombol Logout */
.btn-danger {
    background-color: #dc3545; /* Warna merah untuk tombol */
    color: #fff; /* Warna teks */
    border: none; /* Hilangkan border */
    padding: 1px 5px; /* Padding dalam tombol */
    font-size: 16px; /* Ukuran font */
    border-radius: 5px; /* Sudut tombol membulat */
    cursor: pointer; /* Ubah kursor menjadi pointer */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Animasi saat hover */
}

/* Efek Hover */
.btn-danger:hover {
    background-color: #c82333; /* Warna merah lebih gelap saat hover */
    transform: scale(1.1); /* Membesarkan tombol */
}

    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="{{ url('homeuser') }}" class="logo">
            <img src="assets/logo_mercubuana.png" alt="logo">
        </a>
        <div class="menuToggle" onclick="menuToggle()"></div>
        <nav>
            <ul class="navigation">
                <li><a href="#banner">Home</a></li>
                <li><a href="#profile">Profile Kampus</a></li>
                <li><a href="#berita">Berita</a></li>
                <li><a href="#prestasi">Prestasi</a></li>
                <li><a href="{{ url('homecontact') }}">Kontak</a>
                <!-- Logout Button -->
                <form action="{{ url('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger" style="margin-left: 10px;">Logout</button>
                </form>
                </li>

            </ul>
        </nav>
    </header>

    <!-- End of Header -->

    <!-- landing Page -->
    <section class="banner" id="banner">
        <div class="content">
            <h2>MERCU BUANA UNIVERSITY</h2>
            <p>Selamat datang di Website kami, "Menggali Potensi, Meraih Prestasi!"</p>
            <a href="#profile" class="btn">Profile</a>
        </div>
    </section>
    <!-- End of Landing Page -->

    <!-- about us -->
    <section id="profile" class="about">
        <div class="row">
            <div class="col50">
                <h2 class="title-text">Tentang Kami</h2>
                <p>Kami adalah Universitas Mercu Buana, sebuah perguruan tinggi yang berkomitmen untuk menyediakan pendidikan berkualitas, pengembangan kepribadian, dan peningkatan kompetensi akademik. Sejak didirikan pada tahun 1985, kami telah menjadi bagian integral dari komunitas pendidikan di Jakarta dan diakui sebagai salah satu universitas terkemuka di wilayah ini.
                </p>
                <br>
                <p>
                    Di Universitas Mercu Buana, kami memahami pentingnya mempersiapkan generasi muda untuk menghadapi tantangan global. Oleh karena itu, kami menawarkan kurikulum berbasis standar internasional dengan pengajaran yang inovatif dan metode pembelajaran yang interaktif. Dosen-dosen kami adalah tenaga pengajar yang berkualitas tinggi, berkompeten, dan berdedikasi untuk membantu mahasiswa mencapai potensi terbaik mereka.
                </p>
            </div>
            <div class="col50">
                <div class="imgbox prof">
                    <img src="assets/pembinaan sma 35.jpg" alt="gambar-contoh">
                    <img src="assets/tentangkami.jpeg" alt="Tentang Kami">
                </div>
            </div>
        </div>
    </section>
    <!-- end Of about us -->

    <!-- berita -->
    <section id="berita" class="class">
        <div class="title-class">
            <h2>Berita</h2>
            <p>Kegiatan yang ada di Mercu Buana University</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgbox">
                    <img src="assets/univterbaikjkt.png" alt="gambar-class">
                </div>
                <div class="text">
                    <h3>10 Universitas Swasta Terbaik di Jakarta, Ada Kampus Pilihanmu?</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox box2">
                    <img src="assets/tryoutujian.jpeg" alt="gambar-class">
                </div>
                <div class="text">
                    <h3>Mahasiswa Universitas Mercu Buana Gelar Penyuluhan di SMA 35 Jakarta: Bahas Perbedaan Identitas di Media Digital</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgbox box2">
                    <img src="assets/operasional.jpg" alt="gambar-class">
                </div>
                <div class="text">
                    <h3>Universitas Mercu Buana Terapkan ERP Demi Sederhanakan Kegiatan Operasional Kampus</h3>
                </div>
            </div>
        </div>
        <div class="title-class">
            <a href="https://mercubuana.ac.id/" class="btn" target="_blank">Lihat Semua</a>
        </div>
    </section>
    <!-- end of berita  -->

    <!-- prestasi -->
    <section class="expert" id="prestasi">
        <div class="title">
            <h2 class="title-text">Prestasi</h2>
            <p>Berikut adalah prestasi yang pernah diraih oleh Universitas Mercu Buana</p>
        </div>
        <div class="content">
            <ul>
                <li>Juara 3 National Science Olympiad Tingkat Perguruan Tinggi Se-Indonesia</li>
                <li>Juara 1 Indonesia History Competition Tingkat Nasional</li>
                <li>Juara 4 Accounting Competition Trisakti School of Management 2022 Tingkat Nasional</li>
                <li>Juara 1 Best of The Best Taekwondo Competition Tingkat Nasional</li>
                <li>Juara 1 50 Meter Gaya Kupu-Kupu Putra Kejuaraan Renang Pelajar Bulanan Kota Administrasi Jakarta
                    Pusat Tingkat Kota</li>
                <li>Juara 1 TikTok Challenge in Financial Vlog Competition Perbanas Institute Tingkat Nasionai</li>
                <li>Juara 1 Lomba MTQ Tingkat Jakarta</li>
                <li>Juara 3 Indonesia Biology Competition Tingkat Nasional</li>
                <li>Juara 1 Bharaduta Championship 3 Piala MENPORA RI Tingkat Nasional</li>
                <li>Juara 3 Olimpiade Bahasa Jepang Tingkat Universitas DKI Jakarta Tingkat Provinsi</li>
                <li>Juara 1 Olimpiade Sains Mahasiswa Saintech. PT Akademi Saintech Indonesia Tingkat Nasional</li>
                <li>Juara 2 Sepak Takraw Mahasiswa Tingkat Kota Jakarta Barat</li>
                <li>Juara 1 Futsal Antar Kecamatan Piala Walikota Jakarta Barat Tingkat Kota</li>
            </ul>
        </div>
    </section>
    <!-- end of prestasi -->



    <!-- footer -->
    <footer>
        <div class="copyright">
            <p>Copyright @2024
                <a href="https://www.instagram.com/flerishere/" target="_blank">Created by Kelompok 6</a>
                . All Right Reserved
            </p>
        </div>
    </footer>

    <script>
        // untuk menampilkan class menu sticky
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        // toggle
        function menuToggle() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');

            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>

<?php
session_start();
include_once "koneksi.php";
if ($_SESSION['log'] != "login") {
header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>HALAMAN UTAMA</title>
    <meta name="description" content="" />
    <link rel="icon" href="assets/img/LogoUntirta.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="WebHalamanUtama/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="WebHalamanUtama/particles.js"></script>
    <script src="WebHalamanUtama/app.js"></script>
    <script src="WebHalamanUtama/index.js"></script>
</head>

<body>
<!-- Pembuka Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <h1>Fakultas Ilmu Pendidikan Matematika</h1><hr><span> Unversitas Sultan Ageng Tirtayasa</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#services">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#news">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Penutup Navbar -->

    <!-- Pembuka Home-->
    <header id="home" class="home">
        <div id="particles-js">
            <div class="judul">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Fakultas Ilmu Pendidikan<br><b>Matematika UNTIRTA</b></h1>
                    <p class="lead fw-bold">Hiduppp EMTEKA!!</p>
                    <button class="ohem">Lihat Selengkapnya</button>
                </div>
                <div class="container text-center mt-5 iklan">
                    <div class="row fitur">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 kotak">
                            <img class="img-fluid" src="WebHalamanUtama/Gambar/icon/cloud.png" alt="">
                            <p>Pembelajaran<br>Matematika</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 kotak">
                            <img class="img-fluid" src="WebHalamanUtama/Gambar/icon/demostration.png" alt="">
                            <p>Sharing<br>Matematika</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 kotak">
                            <img class="img-fluid" src="WebHalamanUtama/Gambar/icon/lamp.png" alt="">
                            <p>Himpunan Kelas<br>Kreatif</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 kotak">
                            <img class="img-fluid" src="WebHalamanUtama/Gambar/icon/startup.png" alt="">
                            <p>Sossial Media<br>Strategi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Penutup Home -->

    <!-- Pembuka Tentang Kami -->
    <section class="container about" id="about">
        <div class="clearfix">
            <div class="deskripsi">
                <img src="WebHalamanUtama/Gambar/PNG About Utama.png" class="imabout col-md-6 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
                <h2>Mengenal Kita</h2>
                <p>Pendidikan Matematika berkiprah dalam menyelenggarakan pembelajaran secara profesional untuk menghasilkan lulusan yang memiliki kompetensi pedagogik, kepribadian, sosial, dan profesional, khususnya dalam bidang pendidikan dan pembelajaran matematika dengan memanfaatkan Teknologi Informasi dan Komunikasi. Kualitas proses pendidikan yang dilakukan di Jurusan Pendidikan Matematika terus ditingkatkan agar dapat mencapai Visi yang dirancangkan, yakni,</p>
                <p>“Menghasilkan calon pendidik di bidang Pendidikan Matematika yang unggul, berkarakter dan berdaya saing di Kawasan ASEAN tahun 2030” sehingga dapat menghasilkan lulusan Program Studi Pendidikan Matematika yang unggul di Kawasan ASEAN.</p>
                <button class="tombout"> <a href="https://matematika.fkip.untirta.ac.id/" style="text-decoration: none; color: white;">Lihat Selengkapnya</a></button>
            </div>
        </div>
    </section>
    <!-- Penutup Tentang Kami -->

    <!-- Pembuka Services -->
    <section class="services" id="services">
        <div class="container">
            <div class="row text-center">
                <h2 class="judultextservis">Apa Yang Bisa Kita Lakukan</h2>
                <p class="tekstextservis">Memberikan Contoh Soal Sederhana Dari Beberapa Materi Yang Pernah Di Pelajari Di Masa Sekolah SMA/K. Dengan Memberikan Contoh Soal Dengan Beberapa Pembahasan Diharapkan Pembaca Dapat Mampu Lebih Mudah Memahami Dan Mengerti Secara Mudah.</p>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 services-card mb-5">
                        <div class="card border-0">
                            <img src="WebHalamanUtama/Gambar/Matematika10.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> Contoh Latihan Soal Kelas 10 </h5>
                                    <p class="card-text"> Beberapa Materi Matematika Kelas 10 Yang Dipelajari Antara Lain Pertidaksamaan Linear, Sistem Persamaan Linear, Persamaan Garis Lurus, Persamaan Kuadrat, Fungsi Kuadrat, Trigonometri, Relasi Dan Fungsi, Fungsi Komposisi Dan Invers, Eksponen, Logaritma. </p>
                                </div>
                                <div class="card-body">
                                    <a href="" class="card-link">Lihat Selengkapnya</a>
                                </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 services-card mb-5">
                        <div class="card border-0">
                            <img src="WebHalamanUtama/Gambar/Matematika11.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> Contoh Latihan Soal Kelas 11 </h5>
                                    <p class="card-text"> Di Kurikulum Merdeka Ini Ada Beberapa Penyesuaian Tentang Isi Materi Matematika Ini, Beberapa Materi Diantara Lain, Bilangan Kompleks, Matriks, Transformasi Geometri, Bentuk Akar, Program Linear, Limit Fungsi Aljabar Serta Barisan Dan Deret</p>
                                </div>
                                <div class="card-body">
                                    <a href="" class="card-link">Lihat Selengkapnya</a>
                                </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 services-card mb-5">
                        <div class="card border-0">
                            <img src="WebHalamanUtama/Gambar/Matematika12.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> Contoh Latihan Soal Kelas 12 </h5>
                                    <p class="card-text"> Nadiem Makarim menyebutkan bahwa tiga bidang matematika yang wajib dikuasai siswa adalah statistik, peluang, dan data.Seperti Geometri Bidang Datar Dan Ruang, Statistika, Peluang Kejadian Majemuk, Kaidah Pencacahan Dan Dimensi Tiga.</p>
                                </div>
                                <div class="card-body">
                                    <a href="" class="card-link">Lihat Selengkapnya</a>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Penutup Services -->

    <!-- Pembuka Blog -->
    <section class="news" id="news">
        <div class="container services-cards">
            <div class="row">
                <h2 class="text-center">Terbaru Dari Kami</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 services-card mb-5">
                    <div class="card border-0">
                        <img src="WebHalamanUtama/Gambar/GaleriSatu.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #ffff00;">Tematik 2024</h5>
                                <p class="card-text"> "Temu Mahasiswa Matematika" adalah kegiatan yang biasanya diselenggarakan oleh komunitas atau himpunan mahasiswa matematika di tingkat universitas, regional, atau nasional. Acara ini bertujuan untuk mempertemukan mahasiswa yang memiliki minat dalam bidang matematika, baik dari perguruan tinggi yang sama maupun dari institusi lain. </p>
                            </div>
                            <div class="card-body">
                                <!--<a href="" class="card-link linkblog">Lihat Lebih Lanjut</a>-->
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-card mb-5">
                    <div class="card border-0">
                        <img src="WebHalamanUtama/Gambar/GaleriDua.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #ffff00;">SMA 2 Pandeglang</h5>
                                <p class="card-text">Observasi Anak Matematika ke Sekolah - Sekolah adalah kegiatan yang melibatkan mahasiswa atau komunitas matematika untuk mengamati, mempelajari, dan berinteraksi dengan siswa di sekolah guna memahami pola belajar, tantangan, dan potensi pengembangan pembelajaran sejauh mana mereka mengenal matematika. </p>
                            </div>
                            <div class="card-body">
                                <!--<a href="" class="card-link linkblog">Lihat Lebih Lanjut</a>-->
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-card mb-5">
                    <div class="card border-0">
                        <img src="WebHalamanUtama/Gambar/GaleriTiga.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #ffff00;">Ospek Tematik 2024</h5>
                                <p class="card-text">Ospek Matematika (Orientasi Studi dan Pengenalan Kampus khusus untuk mahasiswa matematika) adalah kegiatan yang bertujuan untuk mengenalkan mahasiswa baru pada lingkungan akademik, budaya, di program studi matematika. Juga, bertujuan membangun kebersamaan dan semangat belajar di kalangan mahasiswa baru.</p>
                            </div>
                            <div class="card-body">
                                <!--<a href="" class="card-link linkblog">Lihat Lebih Lanjut</a>-->
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 services-card mb-5">
                    <div class="card border-0">
                        <img src="WebHalamanUtama/Gambar/GaleriEmpat.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #ffff00;">Foto Kelas</h5>
                                <p class="card-text">Himpunan Mahasiswa Matematika Adalah organisasi yang mewadahi mahasiswa program studi matematika untuk berkegiatan secara kolektif. Kegiatan ini bertujuan untuk mengembangkan potensi akademik, keterampilan sosial, dan kepemimpinan mahasiswa di bidang matematika, sekaligus mempererat hubungan antar anggota.</p>
                            </div>
                            <div class="card-body">
                                <!--<a href="" class="card-link linkblog">Lihat Lebih Lanjut</a>-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Penutup Blog -->

    <!-- Pembuka Hubungi Kami -->
        <section class="contact" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <h2>Hubungi Kami</h2>
                            <p class="tekstextservis">Hubungi Kami Untuk Melakukan Konsultasi Apa Yang Anda Butuhkan Dari Kami, Kami Akan Membalas Lewat G-Mail Harap Masukan Email Yang Valid.</p>
                            <p class="tekstextservis">Harap Sertakan Nama, Email, Dan Pesan Yang Ingin Anda Sampaikan Pada Kolom Berikut.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="kanan">
                                <div class="alert alert-warning alert-dismissible fade show d-none" role="alert">
                                    <strong>Pesanmu Sudah Terkirim!</strong> Terima Kasih Telah Mengirim..
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <form name="pesan-masuk-web-mbc">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Kamu</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" autocomplete="off" placeholder="Nama Kamu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Kamu</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="email" name="email" autocomplete="off" placeholder="fkipuntirta@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Pesan Yang Ingin Kamu Sampaikan</label>
                                        <textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Ketik Pesan Mu Disini"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-danger tombol-kirim">Kirim</button>
                                    <button class="btn btn-danger d-none tombol-loading" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Tunggu...
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    <!-- Penutup Hubungi Kami -->

    <!-- Pembuka Footer -->
        <section class="intouch">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4 col-sm-12 col-md-10">
                        <div class="kiri">
                            <p class="pentuplogo">FKIP EMTEKA<hr><span>Universitas Sultan Ageng Tirtayasa</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 sosmed">
                        <h3> Kontak Kami </h3>
                        <ul>
                            <li><a href="mailto:info@smkn9-kabtangerang.sch.id">info.fkipmatematika@gmail.com</a></li>
                            <li>081213141516</li>
                            <li><a href="https://www.google.com/maps/place/FKIP+UNTIRTA/@-6.130361,106.164625,10z/data=!4m6!3m5!1s0x2e41f53138ed2bcf:0xac42713348f8c795!8m2!3d-6.130361!4d106.1646251!16s%2Fg%2F11btt7tw5n?hl=id-ID&entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D">Serang,Kota Serang, Banten</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <h3>Follow Sosial Media Kami</h3>
                        <div class="medsos">
                            <ul>
                                <li><i class="bi bi-instagram" style="color: #c32aa3;"></i><a href="https://www.instagram.com/fkip.untirta?igsh=NWJoNTNiYzFvZ3dt"> Instagram</a></li>
                                <li><i class="bi bi-whatsapp" style="color: #0cd738;"></i><a href="https://wa.me//6281213141516"> WhastApp</a></li>
                                <li><i class="bi bi-youtube" style="color: #ff0000;"></i><a href="https://www.youtube.com/channel/UCEVZaovckEJyOq2XdGOwaZw"> Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="closing">
            <div class="container">
                <div class="footer-copyright text-center py-3 fw-bold">
                    <a href="https://www.instagram.com/bilarmdhniii?igsh=OTczMmQ3NzJibWc2"> Made With </a> Salsabila Ramadhani
                    <a href="logout.php" class="btn btn-sm btn-primary"><span> LOG OUT</span></a>
                </div>
            </div>
        </div>
    <!-- Penutup Footer -->
    
</body>

</html>
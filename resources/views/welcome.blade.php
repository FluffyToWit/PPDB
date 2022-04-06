<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('welcome', 'SMK Weekrama Bogor') }}</title>

  <!-- Favicons -->
  <link href="{{ asset('/img/wikrama-logo.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/welcome.css')}}" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="/">Weekrama</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/registrasi">Registrasi</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat datang di <br> SMK Weekrama Bogor</h1>
      <a href="/registrasi" class="btn-register">Registrasi Sekarang!</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Program Keahlian Section ======= -->
    <section id="program">
      <div class="container" data-aos="fade-up">
        <div class="section-header mb-5">
          <h3 class="section-title">Program Keahlian</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-code-slash"></i></a></div>
              <h4 class="title"><a href="#">Rekayasa Perangkat Lunak</a></h4>
              <p class="description">Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-palette"></i></a></div>
              <h4 class="title"><a href="#">Multimedia</a></h4>
              <p class="description">Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, corporate brand identity, penerbit majalah/Koran, dll.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-wifi"></i></a></div>
              <h4 class="title"><a href="#">Teknologi Komputer & Jaringan</a></h4>
              <p class="description">Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP dan MCNA.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-shop"></i></a></div>
              <h4 class="title"><a href="#">Bisnis Daring & Pemasaran</a></h4>
              <p class="description">Dapat membuat desain untuk bisnis sendiri, creative content (berbasis media sosial), website berbasis toko online dengan bahasa pemrograman sederhana.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-briefcase"></i></a></div>
              <h4 class="title"><a href="#">Otomatisasi dan Tata Kelola Perkantoran</a></h4>
              <p class="description">Mengetik cepat dengan teknik 10 jari, mengelola dokumen dan arsip kantor, menangani telepon, dan mengelola keuangan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#"><i class="bi bi-egg-fried"></i></a></div>
              <h4 class="title"><a href="#">Tata Boga</a></h4>
              <p class="description">Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Program Keahlian Section -->

    <!-- ======= Foto Sekolah Section ======= -->
    <section id="fotosekolah" class="fotosekolah">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title mb-5">Foto Sekolah</h3>
        </div>

        <div class="row fotosekolah-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-1.jpg')}}">
              <img src="{{ asset('/img/wikrama-1.jpg')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-2.png')}}">
              <img src="{{ asset('/img/wikrama-2.png')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-3.png')}}">
              <img src="{{ asset('/img/wikrama-3.png')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-4.jpg')}}">
              <img src="{{ asset('/img/wikrama-4.jpg')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-5.jpg')}}">
              <img src="{{ asset('/img/wikrama-5.jpg')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

          <div class="col-lg-4 col-md-6 fotosekolah-item">
            <a href="{{ asset('/img/wikrama-6.jpg')}}">
              <img src="{{ asset('/img/wikrama-6.jpg')}}" class="img-fluid fotosekolah-lightbox preview-link" alt="">
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Foto Sekolah Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SMK Weekrama Bogor</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js')}}"></script>
    
  <!-- Template Main JS File -->
  <script src="{{ asset('/js/welcome.js')}}"></script>

</body>

</html>
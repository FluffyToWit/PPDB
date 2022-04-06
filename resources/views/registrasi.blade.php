<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('registrasi', 'SMK Weekrama Bogor') }}</title>

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
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="/">Weekrama</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto active" href="/registrasi">Registrasi</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    <!-- ======= Registrasi Section ======= -->
    <section id="registrasi">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Registrasi</h3>
          <p class="section-description">Isilah form registrasi dibawah ini untuk mendaftar ke sekolah kami!</p>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="/registrasi/store" method="POST" class="php-email-form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama" class="form-title">Nama Peserta</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap..." required>
                </div>
                <div class="form-group mt-3">
                    <label for="jk" class="form-title">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="alamat" class="form-title">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap..." required>
                </div>
                <div class="form-group mt-3">
                    <label for="agama" class="form-title">Agama</label>
                    <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="asalsekolah" class="form-title">Asal Sekolah</label>
                    <input type="text" name="asalsekolah" class="form-control" placeholder="Asal Sekolah..." required>
                </div>
                <div class="form-group mt-3">
                    <label for="jurusan" class="form-title">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="RPL">RPL</option>
                        <option value="MMD">MMD</option>
                        <option value="TKJ">TKJ</option>
                        <option value="BDP">BDP</option>
                        <option value="OTKP">OTKP</option>
                        <option value="TBG">TBG</option>
                    </select>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-4">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="text-center mt-5">
                    <input type="submit" name="daftar" value="Daftar"></button>
                </div>
                
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Registrasi Section -->

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
        
    <!-- Template Main JS File -->
    <script src="{{ asset('/js/welcome.js')}}"></script>

</body>

</html>
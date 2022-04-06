<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('home', 'SMK Weekrama Bogor') }}</title>

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
          <li><a class="nav-link scrollto active" href="/home">Pendaftar</a></li>
          <li><a class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    <!-- ======= Registrasi Section ======= -->
    <section id="registrasi">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Tabel Pendaftar</h3>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row justify-content-center">

            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <form class="form" method="get" action="{{ route('search') }}">
                        <div class="col-md-12">
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 pl-3 purple-border" type="text" name="search" placeholder="Cari siswa..." aria-label="Search">
                                <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </div>
                        </div>
                      </form>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Alamat</th>
                              <th>Agama</th>
                              <th>Asal Sekolah</th>
                              <th>Jurusan</th>
                              <th></th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        @foreach($siswa as $p)
                        <tbody>
                            <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $p->nama }}</td>
                              <td>{{ $p->jk }}</td>
                              <td>{{ $p->alamat }}</td>
                              <td>{{ $p->agama }}</td>
                              <td>{{ $p->asalsekolah }}</td>
                              <td>{{ $p->jurusan }}</td>
                              <td>
                                <form action="{{ route('pendaftar.destroy',$p->id) }}" method="POST">
                  
                                  <a class="btn btn-primary" href="{{ route('pendaftar.edit',$p->id) }}">Edit</a>
                 
                                  @csrf
                                  @method('DELETE')
                    
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                              </td>
                            </tr>
                        </tbody>
                        @endforeach
                        @if ($message = Session::get('success'))
                              <div class="alert alert-success mt-4">
                                  <p>{{ $message }}</p>
                              </div>
                        @endif
                        <!--Table body-->
                    </table>
                    <!--Table-->
                    <a href="cetakPDF" class="btn btn-secondary bi bi-file-pdf" target="_blank" style="float: right"></a>
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
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('download', 'SMK Weekrama Bogor') }}</title>

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
 
    <section id="registrasi" style="padding-top: 40px;">
        <div class="container">
          <div class="section-header">
            <h3 class="section-title">DATA SELURUH PESERTA PENERIMAAN PESERTA DIDIK BARU <br> SEKOLAH SMK WEEKRAMA BOGOR</h3>
            </div>
        </div>
    </section>

 <table class="table table-striped ">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
      </tr>
         <?php 
         $no = 1;
        ?>
        @foreach($data as $p)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jk }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->asalsekolah }}</td>
            <td>{{ $p->jurusan }}</td>
     </tr>
     @endforeach
 </table>

 <script>
     window.print();
 </script>

</body>
</html>
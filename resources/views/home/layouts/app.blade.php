<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agen-X</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/home/img/favicon.png" rel="icon">
  <link href="assets/home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('/assets/home/vendor/aos/aos.css') }}s" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('/assets/home/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <style>
    .ticket-card {
      background-color: #f0f0f0;
      border: 2px solid #ccc;
      border-radius: 10px;
      max-width: 400px;
      margin: 0 auto;
  }

  .ticket-header {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      font-weight: bold;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
  }

  .ticket-body {
      padding: 20px; 
  }

  .ticket-info p {
      margin-bottom: 10px; 
  }
  .ticket-barcode {
  }
  </style>
  <!-- ======= Header ======= -->
  @include('home.layouts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  @yield('content')
  </section>

  <!-- ======= Footer ======= -->
  @include('home.layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('/assets/home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('/assets/home/js/main.js') }}"></script>

</body>

</html>
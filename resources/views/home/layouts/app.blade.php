<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agen-X</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ url('assets/home/img/favicon-32x32.png') }}" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/home/css/style.css') }}" rel="stylesheet">
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
  @include('home.layouts.header')
  <section id="hero">
  @yield('content')
  </section>
  @include('home.layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ url('/assets/home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('/assets/home/vendor/php-email-form/validate.js') }}"></script>

  <script src="{{ url('/assets/home/js/main.js') }}"></script>

</body>

</html>
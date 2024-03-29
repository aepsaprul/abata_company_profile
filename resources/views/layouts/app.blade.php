<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Company Profile Abata') }}</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-daun.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo-daun.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/aep.css') }}">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  @yield('style')
</head>

<body>

  @include('layouts.navigasi')

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('assets/img/logo-biru-2.png') }}" alt="">
            </a>
            <p>#SahabatBertumbuh</p>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4 class="font-weight-bold text-uppercase text-primary">Sosial</h4>
            <div class="social-links mt-3">
              <a href="https://vm.tiktok.com/ZSRopJbpu/" class="tiktok" title="Tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.facebook.com/Abataprintingpurwokerto" class="facebook" title="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/abataprinting_/" class="instagram" title="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCQh6JvwZ_nt6fyKhPkOI8FA" class="youtube" title="Youtube" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4 class="font-weight-bold text-uppercase text-primary">Legal</h4>
            <ul>
              <li><a href="{{ route('compro.privacy') }}" target="_blank" class="text-secondary">Kebijakan Pribadi</a></li>
              <li><a href="{{ route('compro.term') }}" target="_blank" class="text-secondary">Syarat & Ketentuan</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4 class="font-weight-bold text-uppercase text-primary">Kontak</h4>
            <a href="https://api.whatsapp.com/send/?phone=6285726269500&#038;text=Assalamu%27alaikum+&#038;app_absent=0" target="_blank" class="text-secondary">Ajukan Pertanyaan</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>&copy;2022 Abata Printing. Hak Cipta Dilindungi.</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="margin-bottom: 100px;"><i class="bi bi-arrow-up-short"></i></a>
  <a href="https://api.whatsapp.com/send/?phone=6285726269500&#038;text=Assalamu%27alaikum+&#038;app_absent=0" class="float" target="_blank">
    <i class="bi bi-whatsapp my-float"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/aep.js') }}"></script>

  @yield('script')

</body>

</html>
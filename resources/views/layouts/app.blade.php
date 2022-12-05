<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Company Profile Abata') }}</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/assets/img/logo-daun.png') }}" rel="icon">
  <link href="{{ asset('public/assets/img/logo-daun.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/assets/css/aep.css') }}">

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

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Cetak Online Via Whatsapp</h4>
            <p><a href="https://wa.me/62123456789?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" target="_blank"><img src="{{ asset('public/assets/img/whatsapp-button.png') }}" alt="tombol-whatsapp" style="max-width: 300px;"></a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('public/assets/img/logo-biru.png') }}" alt="">
            </a>
            <p>#SahabatBertumbuh</p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 class="font-weight-bold text-uppercase text-primary">Sosial</h4>
            <div class="social-links mt-3">
              <a href="https://vm.tiktok.com/ZSRopJbpu/" class="tiktok" title="Tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
              <a href="https://twitter.com/abataprinting_" class="twitter" title="Twitter" target="_blank"><i class="bi bi-twitter"></i></a>
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
            <a href="https://wa.me/62123456789?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" target="_blank" class="text-secondary">Ajukan Pertanyaan</a>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>&copy;2022 Abata Printing. All Right Reserved.</span></strong>
        {{-- &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved --}}
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center mb-5"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  {{-- <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
  <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
  <script src="{{ asset('public/assets/js/aep.js') }}"></script>

  @yield('script')

</body>

</html>
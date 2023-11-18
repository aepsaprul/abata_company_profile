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

</head>

<body>
  <div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-12">
      <div class="text-primary h1 text-uppercase text-center">visi</div>
      <p class="p-3 text-justify">
        Menjadi Perusahaan Berskala Nasional yang Expert dalam Peningkatan Traffic dan Membangun Brand Awareness bagi Pertumbuhan UMKM di Indonesia
      </p>
      <div class="text-primary h1 text-uppercase text-center">misi</div>
      <div>
        <ol>
          <li>Memberikan layanan yang komprehensif bagi UMKM</li>
          <li>Memberikan produk-produk terbaik yang bermanfaat dan dibutuhkan bagi UMKM</li>
          <li>Memiliki Tim yang profesional, kompeten dan berpengalaman</li>
          <li>Memiliki sarana dan prasarana sesuai dengan perkembangan teknologi</li>
        </ul>
      </div>
      <div class="p-3"><span style="font-weight: bold;">NILAI PERUSAHAAN - “ SPEAK ”</span></div>
      <div>
        <ol>
          <li>Spiritual</li>
          Penerapan lingkungan kerja yang berbasis pada nilai keagamaan sehingga setiap usaha yang dilakukan tidak hanya bertujuan untuk mendatangkan keuntungan
          <li>Profesional</li>
          Melaksanakan tugas dengan baik dan tuntas sesuai dengan keahlian untuk mencapai hasil yang prima melalui kerjasama
          <li>Efektif dan Efisien</li>
          Tetap menghasilkan sesuatu dan melampaui target yang telah ditetapkan walaupun dengan sumber daya minimal
          <li>Adaptif</li>
          Memiliki semangat yang tinggi, kemampuan berinovasi serta proaktif dalam menghadapi perubahan 
          <li>Kreatif dan Inovatif</li>
          Terus menciptakan dan mengembangkan ide-ide baru serta melakukan pembaharuan (kreasi baru) untuk mendukung pertumbuhan perusahaan
        </ol>
      </div>
      <div class="mb-3 p-3"><span style="font-weight: bold;">BUDAYA KERJA - “ 5K ”</span></div>
      <div>
        <ol>
          <li>Kejujuran</li>
          Pondasi karyawan untuk memiliki integritas dan kredibilitas yang tinggi
          <li>Kerjasama</li>
          Kerjasama tim yang baik dapat membantu perusahaan dalam mencapai tujuan dan membuat semua tim selaras menuju satu visi kesuksesan bersama-sama
          <li>Kedisiplinan</li>
          Sikap yang menghargai, menghormati, taat dan patuh terhadap peraturan yang berlaku dalam berusahaan
          <li>Kompeten</li>
          Keterampilan dan keahlian tim untuk melakukan segala sesuatu dengan baik dan dapat memberikan kinerja yang tinggi
          <li>Kecepatan</li>
          Kemampuan tim untuk menyelesaikan pekerjaan secara tuntas sesuai waktu yang telah ditentukan
        </ol>
      </div>
      <div class="mb-3 p-3"><span style="font-weight: bold;">Tema Kerja Tahunan</span></div>
      <div class="mb-3 p-3">
        <table>
          <tr>
            <td>Tahun 2021</td>
            <td>“One Pray One Dream One Team”</td>
          </tr>
          <tr>
            <td>Tahun 2022</td>
            <td>“Great Strategic for Big Benefit”</td>
          </tr>
          <tr>
            <td>Tahun 2023</td>
            <td>“Recovery and Growth with Collaboration”</td>
          </tr>
          <tr>
            <td>Tahun 2024</td>
            <td>“.....“</td>
          </tr>
        </table>
      </div>
      <div class="p-3"><span style="font-weight: bold;">Unit bisnis Abata Group</span></div>
      <div class="mb-3 p-3">
        <img src="{{ asset('public/assets/img/unit-bisnis.png') }}" alt="img" style="width: 100%;">
      </div>
      <div>
        <table class="table table-bordered" style="font-size: 10px;">
          <thead>
            <tr>
              <th class="text-center p-2">No</th>
              <th class="text-center p-2">Unit Bisnis</th>
              <th class="text-center p-2">Deskripsi</th>
              <th class="text-center p-2">Tagline</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>WAHANA	SATRIA</td>
              <td>Percetakan Offset</td>
              <td>Mitra Profesional</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>ABATA PRINTING</td>
              <td>Digital Printing</td>
              <td>Sahabat Bertumbuh</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>ADAYA BERKAH MULIA</td>
              <td>Pengadaan Barang dan Direct Selling</td>
              <td>Partner Terpercaya</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>MAKZON</td>
              <td>Digital Marketing Agency</td>
              <td>Evolve Faster</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>UTAK ATIK</td>
              <td>Creative Product</td>
              <td>Selalu Ada Ide</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>ABASOFT</td>
              <td>Sistemasi dan Softwarehouse</td>
              <td>Semua Jadi Mudah</td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>ABAVEST</td>
              <td>Perusahaan Investasi</td>
              <td>Sahabat Investasi</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
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

</body>

</html>
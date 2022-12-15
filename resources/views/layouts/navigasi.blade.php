<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" style="background-color: white;">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <div>
        <img src="{{ asset('public/assets/img/logo-biru.png') }}" alt="">
      </div>
      <div>
        <h1>Abata Printing</h1>
        <p>Sahabat Bertumbuh</p>
      </div>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#about') }}">Tentang</a></li>
        <li><a class="nav-link" href="{{ route('compro.blog') }}">Blog</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#gabung') }}">Gabung</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#cabang') }}">Cabang</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#produk') }}">Produk</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Kontak</a></li>
        <li><a class="nav-link scrollto" href="#footer">Order</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
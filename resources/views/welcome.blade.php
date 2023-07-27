@extends('layouts.app')

@section('style')

@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" style="padding: 0;">
    <div class="container" style="padding-top: 90px;">
      <div class="row">
        <!-- Swiper -->
        <div class="swiper heroSwiper">
          <div class="swiper-wrapper">
            @foreach ($slide as $item)
              <div class="swiper-slide"><img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/slide/' . $item->gambar) }}" alt="banner"></div> 
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding: 10px 0;">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang Abata</h3>
              <p style="text-align: justify; text-indent: 50px;">
                {{ Str::substr($sejarah->deskripsi, 0, 300) }}...
              </p>
              <div class="text-center text-lg-start">
                <a href="{{ route('compro.tentang') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/tentang/' . $tentang_gambar->gambar) }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Gabung Section ======= -->
    <section id="gabung" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Bergabung Dengan Abata</h2>
          <p class="text-uppercase">Dapatkan keuntungan lebih banyak</p>
        </header>
        <div class="row">
          @foreach ($gabungs as $item)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/gabung/' . $item->gambar) }}" class="img-fluid" alt="">
                <h3 class="text-capitalize">{{ $item->nama }}</h3>
                <p>{!! $item->deskripsi !!}</p>
              </div>
            </div>              
          @endforeach
        </div>
      </div>
    </section><!-- End Gabung Section -->

    <!-- ======= Cabang Section ======= -->
    <section id="cabang" class="services">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Cabang</h2>
          <p class="text-uppercase">Cetak dimana saja melalui cabang terdekat</p>
        </header>
        <div class="row gy-4">
          @foreach ($cabangs as $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/cabang/' . $item->gambar) }}" alt="" style="max-width: 300px;">
                <p style="margin-top: 30px;"><a href="{{ $item->maps }}" target="_blank" style="color: #000;">{{ $item->alamat }}</a></p>
                <span><a href="https://wa.me/62123456789?text=contoh%20isi%20pesan%20dikirim%20via%20whatsapp" target="_blank" style="color: #000;">{{ $item->kontak }}</a></span>
              </div>
            </div>              
          @endforeach
        </div>
      </div>
    </section><!-- End Cabang Section -->

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="portfolio">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Produk</h2>
          <p class="text-uppercase">Lihat produk terbaru kami</p>
        </header>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!-- <li data-filter="*" class="filter-active">Semua</li> -->
              <li data-filter=".filter-a3" class="filter-active uppercase" style="font-size: 14px;">A3</li>
              <li data-filter=".filter-indoor" class="text-uppercase" style="font-size: 14px;">Indoor</li>
              <li data-filter=".filter-outdoor" class="text-uppercase" style="font-size: 14px;">Outdoor</li>
              <li data-filter=".filter-merchandise" class="text-uppercase" style="font-size: 14px;">Merchandise</li>
              <li data-filter=".filter-advertising" class="text-uppercase" style="font-size: 14px;">Advertising</li>
              <li data-filter=".filter-uv" class="text-uppercase" style="font-size: 14px;">UV</li>
              <li data-filter=".filter-dtf" class="text-uppercase" style="font-size: 14px;">DTF</li>
              <li data-filter=".filter-akrilik" class="text-uppercase" style="font-size: 14px;">Akrilik</li>
              <li data-filter=".filter-offset" class="text-uppercase" style="font-size: 14px;">Offset</li>
              <li data-filter=".filter-finishing" class="text-uppercase" style="font-size: 14px;">Finishing</li>
            </ul>
          </div>
        </div>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($produk_a3 as $item)
            <div class="col-lg-2 col-md-4 portfolio-item">
              <div class="portfolio-wrap">
                <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/produk/' . $item->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 class="text-uppercase">{{ $item->nama_produk }}</h4>
                  <div class="portfolio-links">
                    <a href="{{ url(env('APP_URL_ADMIN') . 'img_compro/produk/' . $item->gambar) }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
                <div class="text-center fw-bold text-uppercase mt-2">{{ $item->nama_produk }}</div>
                <!-- <div class="text-center">{{ $item->harga }}</div> -->
              </div>
            </div>
          @endforeach

          @foreach ($produks as $item)
            <div class="col-lg-2 col-md-4 portfolio-item filter-{{ $item->kategori }}" style="display: none;">
              <div class="portfolio-wrap">
                <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/produk/' . $item->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 class="text-uppercase">{{ $item->nama_produk }}</h4>
                  <div class="portfolio-links">
                    <a href="{{ url(env('APP_URL_ADMIN') . 'img_compro/produk/' . $item->gambar) }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  </div>
                </div>
                <div class="text-center fw-bold text-uppercase mt-2">{{ $item->nama_produk }}</div>
                <div class="text-center">{{ $item->harga }}</div>
              </div>
            </div>              
          @endforeach
        </div>
      </div>
    </section><!-- End Produk Section -->

    <!-- ======= Partner Section ======= -->
    <!-- <section id="partner" class="clients">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Didukung Oleh:</p>
        </header>
        <div class="af-partner-wrapper">
          @foreach ($partners as $item)
            <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/partner/' . $item->gambar) }}" alt="partner">
          @endforeach
        </div>
      </div>
    </section> -->

    <section>
      <div class="container af-blog" data-aos="fade-left">
        <header class="section-header af-header">
          <p class="text-uppercase">Blog</p>
        </header>
        <div class="af-blog-wrapper">
          <div class="af-blog-thumbnail">
            <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/blog/' . $blog_thumbnail->gambar) }}" alt="blog">
            <p class="af-blog-judul"><a href="{{ route('compro.blog.detail', [$blog_thumbnail->id]) }}">{{ $blog_thumbnail->judul }}</a></p>
            <div class="af-blog-tanggal">
              <div class="af-blog-tanggal-icon"><i class="ri-calendar-2-line"></i></div>
              <div class="af-blog-tanggal-teks">02 Des 2022</div>
            </div>
            <p class="af-blog-deskripsi">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis consequuntur rerum, placeat dicta eveniet, repellendus iste necessitatibus facere commodi, explicabo reprehenderit illum asperiores nisi fugit! Molestiae voluptate iste voluptatem ea?  
            </p>
          </div>
          <div class="af-blog-list">
            @foreach ($blog_list as $key => $item)
              @if ($key != 0)
                  <div>
                    <img src="{{ url(env('APP_URL_ADMIN') . 'img_compro/blog/' . $item->gambar) }}" alt="blog">
                    <p class="af-blog-judul"><a href="{{ route('compro.blog.detail', [$item->id]) }}">{{ $blog_thumbnail->judul }}</a></p>
                    <div class="af-blog-tanggal">
                      <div class="af-blog-tanggal-icon"><i class="ri-calendar-2-line"></i></div>
                      <div class="af-blog-tanggal-teks">02 Des 2022</div>
                    </div>
                  </div>                
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Kontak</h2>
          <p class="text-uppercase">Kontak Kami</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              @foreach ($kontaks as $item)
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="{{ $item->icon }}"></i>
                    <h3>{{ $item->title }}</h3>
                    <p>{!! $item->deskripsi !!}</p>
                  </div>
                </div>                  
              @endforeach
            </div>
          </div>
          <div class="col-lg-6 php-email-form">
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
              </div>
              <div class="col-md-6 ">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek" required>
              </div>
              <div class="col-md-12">
                <textarea id="pesan" class="form-control" name="pesan" rows="6" placeholder="Pesan" required></textarea>
              </div>
              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <button type="submit" id="btn-submit">Kirim Pesan</button>
                <div id="sent-message" class="sent-message">Pesan Anda berhasil terkirim. Terima kasih!</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
@endsection

@section('script')

<script>
  var csrf = document.querySelector('meta[name="csrf-token"]').content;

  let nama = document.getElementById('nama');
  let email = document.getElementById('email');
  let subjek = document.getElementById('subjek');
  let pesan = document.getElementById('pesan');
  let sent_message = document.getElementById('sent-message');

  let btn_submit = document.getElementById('btn-submit');
  btn_submit.onclick = function (e) {
    let dataObj = {
      nama: nama.value,
      email: email.value,
      subjek: subjek.value,
      pesan: pesan.value,
      _token: csrf
    }
  
    let postData = JSON.stringify(dataObj);
    // console.log(postData);
  
    const url = "{{ URL::route('compro.kontak.store') }}";
    let xhr = new XMLHttpRequest();
  
    xhr.open('POST', url, true)
    xhr.setRequestHeader('Content-type', 'application/json; charset=UT-8')
    xhr.send(postData);
  
    xhr.onload = function () {
      if (xhr.status === 200) {
        sent_message.style.cssText = "display: block;"
      }
    }    
  }

</script>
@endsection

  

  

  
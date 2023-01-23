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
              {{-- dev --}}
              <div class="swiper-slide"><img src="{{ asset('http://localhost/abata_hrd/public/compro/slide/' . $item->gambar) }}" alt="banner"></div> 
              {{-- prod --}}
              {{-- <div class="swiper-slide"><img src="{{ asset('https://hcm.abata-printing.com/public/compro/slide/' . $item->gambar) }}" alt="banner"></div>    --}}
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
            {{-- dev --}}
            <img src="{{ asset('http://localhost/abata_hrd/public/compro/tentang/' . $tentang_gambar->gambar) }}" class="img-fluid" alt="">
            {{-- prod --}}
            {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/tentang/' . $tentang_gambar->gambar) }}" class="img-fluid" alt=""> --}}
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Gabung Section ======= -->
    <section id="gabung" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Bergabung Dengan Abata</h2>
          <p>Dapatkan keuntungan lebih banyak</p>
        </header>

        <div class="row">

          @foreach ($gabungs as $item)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                {{-- dev --}}
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/gabung/' . $item->gambar) }}" class="img-fluid" alt="">
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/gabung/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                <h3 class="text-capitalize">{{ $item->nama }}</h3>
                <p style="text-align: justify;">{{ $item->deskripsi }}</p>
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
          <p>Cetak dimana saja melalui cabang terdekat</p>
        </header>

        <div class="row gy-4">

          @foreach ($cabangs as $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                {{-- dev --}}
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/cabang/' . $item->gambar) }}" alt="" style="max-width: 300px;">
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/cabang/' . $item->gambar) }}" alt="" style="max-width: 300px;"> --}}
                {{-- <h3 class="text-capitalize">{{ $item->nama }}</h3> --}}
                <p style="margin-top: 30px;"><a href="https://goo.gl/maps/JDhXHDZ1kCuwRYrN8" target="_blank" style="color: #000;">{{ $item->alamat }}</a></p>
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
          <p>Lihat produk terbaru kami</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-a3">A3</li>
              <li data-filter=".filter-indoor">Indoor</li>
              <li data-filter=".filter-outdoor">Outdoor</li>
              <li data-filter=".filter-merchandise">Merchandise</li>
              <li data-filter=".filter-advertising">Advertising</li>
              <li data-filter=".filter-uv">UV</li>
              <li data-filter=".filter-dtf">DTF</li>
              <li data-filter=".filter-akrilik">Akrilik</li>
              <li data-filter=".filter-offset">Offset</li>
              <li data-filter=".filter-finishing">Finishing</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($produks as $item)
            <div class="col-lg-2 col-md-4 portfolio-item filter-{{ $item->kategori }}">
              <div class="portfolio-wrap">
                {{-- dev --}}
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/produk/' . $item->gambar) }}" class="img-fluid" alt="">
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/produk/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                <div class="portfolio-info">
                  <h4 class="text-uppercase">{{ $item->nama_produk }}</h4>
                  <div class="portfolio-links">
                    {{-- dev --}}
                    <a href="{{ asset('http://localhost/abata_hrd/public/compro/produk/' . $item->gambar) }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                    {{-- prod --}}
                    {{-- <a href="{{ asset('https://hcm.abata-printing.com/public/compro/produk/' . $item->gambar) }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a> --}}
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

    <!-- ======= Testimoni Section ======= -->
    <section id="testimoni" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimoni</h2>
          <p>Apa yang mereka katakan tentang kami</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            @foreach ($testimonis as $item)
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>{{ $item->komentar }}</p>
                  <div class="profile mt-auto">
                    {{-- dev --}}
                    <img src="{{ asset('http://localhost/abata_hrd/public/compro/testimoni/' . $item->foto) }}" class="testimonial-img" alt="">
                    {{-- prod --}}
                    {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/testimoni/' . $item->foto) }}" class="testimonial-img" alt=""> --}}
                    <h3>{{ $item->nama }}</h3>
                    {{-- <h4>Ceo &amp; Founder</h4> --}}
                  </div>
                </div>
              </div><!-- End testimonial item -->                
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimoni Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Tim</h2>
          <p>Tim kerja keras kami</p>
        </header>

        <div class="row gy-4">

          @foreach ($tims as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img"> --}}
                  {{-- dev --}}
                  {{-- <img src="{{ asset('http://localhost/abata_hrd/public/compro/tim/' . $item->foto) }}" class="img-fluid" alt=""> --}}
                  {{-- prod --}}
                  {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/tim/' . $item->foto) }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4 class="text-capitalize">{{ $item->nama }}</h4>
                  <span>{{ $item->jabatan }}</span>
                  <p>"{{ $item->deskripsi }}"</p>
                </div>
              </div>
            </div>              
          @endforeach

        </div>

      </div>

    </section> --}}
    <!-- End Team Section -->

    <!-- ======= Pelanggan Section ======= -->
    <section id="pelanggan" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Pelanggan Kami</p>
        </header>
        <div class="af-client-wrapper">
          @foreach ($pelanggans as $item)
            {{-- dev --}}
            <img src="{{ asset('http://localhost/abata_hrd/public/compro/pelanggan/' . $item->gambar) }}" alt="pelanggan">
            {{-- prod --}}
            {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/pelanggan/' . $item->gambar) }}" alt="pelanggan"> --}}
          @endforeach
        </div>

        {{-- <div class="clients-slider swiper"> --}}
          <!-- Swiper -->
          {{-- <div class="swiper pelangganSwiper"> --}}
            {{-- <div class="swiper-wrapper"> --}}
              {{-- @foreach ($pelanggans as $item) --}}
                {{-- <div class="swiper-slide"> --}}
                  {{-- dev --}}
                  {{-- <img src="{{ asset('http://localhost/abata_hrd/public/compro/pelanggan/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                  {{-- prod --}}
                  {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/pelanggan/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                {{-- </div> --}}
                {{-- @endforeach --}}
            {{-- </div> --}}
          {{-- </div> --}}
          {{-- <div class="swiper-wrapper align-items-center">
            @foreach ($pelanggans as $item)
              <div class="swiper-slide"> --}}
                {{-- dev --}}
                {{-- <img src="{{ asset('http://localhost/abata_hrd/public/compro/pelanggan/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/pelanggan/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
              {{-- </div>          
            @endforeach
          </div>
          <div class="swiper-pagination"></div> --}}
        </div>
      </div>

    </section><!-- End pelanggan Section -->

    <!-- ======= Partner Section ======= -->
    <section id="partner" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Partner</h2> --}}
          <p>Didukung Oleh:</p>
        </header>
        <div class="af-partner-wrapper">
          @foreach ($partners as $item)
            {{-- dev --}}
            <img src="{{ asset('http://localhost/abata_hrd/public/compro/partner/' . $item->gambar) }}" alt="partner">
            {{-- prod --}}
            {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/partner/' . $item->gambar) }}" alt="partner"> --}}
          @endforeach
        </div>

        {{-- <div class="clients-slider swiper"> --}}
          <!-- Swiper -->
          {{-- <div class="swiper partnerSwiper"> --}}
            {{-- <div class="swiper-wrapper"> --}}
              {{-- @foreach ($partners as $item) --}}
                {{-- <div class="swiper-slide"> --}}
                  {{-- dev --}}
                  {{-- <img src="{{ asset('http://localhost/abata_hrd/public/compro/partner/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                  {{-- prod --}}
                  {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/partner/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                {{-- </div> --}}
                {{-- @endforeach --}}
            {{-- </div> --}}
          {{-- </div> --}}
          {{-- <div class="swiper-wrapper align-items-center">
            @foreach ($partners as $item)
              <div class="swiper-slide"> --}}
                {{-- dev --}}
                {{-- <img src="{{ asset('http://localhost/abata_hrd/public/compro/partner/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/partner/' . $item->gambar) }}" class="img-fluid" alt=""> --}}
              {{-- </div>          
            @endforeach
          </div>
          <div class="swiper-pagination"></div> --}}
        {{-- </div> --}}
      </div>

    </section>

    <section>
      <div class="container af-blog" data-aos="fade-left">
        <header class="section-header af-header">
          <p>Blog</p>
        </header>
        <div class="af-blog-wrapper">
          <div class="af-blog-thumbnail">
            {{-- dev --}}
            <img src="{{ asset('http://localhost/abata_hrd/public/compro/blog/' . $blog_thumbnail->gambar) }}" alt="blog">
            {{-- prod --}}
            {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/blog/' . $blog_thumbnail->gambar) }}" alt="blog"> --}}
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
                    {{-- dev --}}
                    <img src="{{ asset('http://localhost/abata_hrd/public/compro/blog/' . $item->gambar) }}" alt="blog">
                    {{-- prod --}}
                    {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/blog/' . $item->gambar) }}" alt="blog"> --}}
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
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              @foreach ($kontaks as $item)
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="{{ $item->icon }}"></i>
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->deskripsi }}</p>
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

    {{-- <section id="map">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3157973730754!2d109.2408753647953!3d-7.4302631264244585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5609037960fc0ab3!2sABATA%20PRINTING%20PURWOKERTO!5e0!3m2!1sid!2sid!4v1669451753957!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4538562399953!2d109.26787541530466!3d-7.414916375086345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fd2360fbbfb%3A0x5e56f7d7754c5826!2sABATA%20Printing%20Dukuhwaluh!5e0!3m2!1sid!2sid!4v1669451907111!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.561153404379!2d109.24285451530459!3d-7.402967274950527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ffe4169f3eb%3A0x64d4f3c2042c8c01!2sAbata%20Printing%20HR%20Bunyamin!5e0!3m2!1sid!2sid!4v1669451854163!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6558759897175!2d109.3671973153046!3d-7.39240257483066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6559d2e28893e9%3A0x2c6eeeaedca567ec!2sCV.%20Abata%20Printing%20Purbalingga!5e0!3m2!1sid!2sid!4v1669451816416!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.84551838955!2d109.02535381530727!3d-7.69972207839281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6512ceab2d45eb%3A0x1cebdf4f7c13422b!2sABATA%20Printing%20Cilacap!5e0!3m2!1sid!2sid!4v1669451934484!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="swiper-slide">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9184071411655!2d109.01483151530343!3d-7.250126873233547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8ff12fb3706d%3A0xe786890c080740a0!2sAbata%20Printing%20Bumiayu!5e0!3m2!1sid!2sid!4v1669451984313!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section> --}}

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

  

  

  
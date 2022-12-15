@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="af-blog-page-title">
    <div class="container">
      <p>BLOG</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <div class="af-blog-page-content">
            @foreach ($blogs as $item)
              <div class="af-blog-container">
                {{-- dev --}}
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/blog/' . $item->gambar) }}" alt="blog">
                {{-- prod --}}
                {{-- <img src="{{ asset('https://hcm.abata-printing.com/public/compro/blog/' . $item->gambar) }}" alt="blog"> --}}
                <p class="af-blog-judul"><a href="{{ route('compro.blog.detail', [$item->id]) }}">{{ $item->judul }}</a></p>
                <div class="af-blog-tanggal">
                  <div class="af-blog-tanggal-icon"><i class="ri-calendar-2-line"></i></div>
                  <div class="af-blog-tanggal-teks">{{ $item->created_at }}</div>
                </div>
              </div>                
            @endforeach
          </div>
        </div>
      </div>
      <div class="row">        
        <div class="af-blog-page-paginate">
            {{ $blogs->links() }}
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
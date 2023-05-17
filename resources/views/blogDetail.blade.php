@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="af-blog-detail-page-title">
    <div class="af-blog-detail-container">
      <h1>{{ $blog->judul }}</h1>
    </div>
  </div><!-- End Breadcrumbs -->
  
  <div class="af-blog-detail-content">
    <div class="af-blog-detail-container">
      <img src="{{ url(env('APP_URL_ADMIN') . '/compro/blog/' . $blog->gambar) }}" alt="blog">
      <div class="af-blog-detail-deskripsi">{!! $blog->deskripsi !!}</div>
      <hr>
      <div class="af-blog-detail-tanggal">Terbit: {{ $blog->created_at }}</div>
      <div class="af-blog-detail-button">
        <a href="{{ route('compro.blog') }}"><i class="ri-arrow-left-line"></i> <span>Kembali</span></a>
      </div>
    </div>
  </div>

</main><!-- End #main -->
@endsection
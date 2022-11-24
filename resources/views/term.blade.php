@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Syarat & Ketentuan Abata</li>
      </ol>
      <h2>Syarat & Ketentuan Abata</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-12">
          <p style="text-indent: 50px; text-align:justify;">{{ $term->deskripsi }}</p>
          <a href="#" id="btn-kembali" class="text-danger p-1 border-bottom border-danger"><i class="bi bi-arrow-left-short"></i> Kembali</a>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection

@section('script')
<script>
  let btn_kembali = document.getElementById("btn-kembali");
  btn_kembali.addEventListener("click", function (e) {
    e.preventDefault();
    window.close();
  })
</script>
@endsection
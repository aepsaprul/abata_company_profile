@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container" style="text-align: center;">
      <p style="margin-top: 20px;">BLOG</p>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <div style="display: grid; grid-template-columns: auto auto auto; gap: 30px;">
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
            <div style="padding: 10px; box-shadow: -3px -1px 12px -1px rgba(0,0,0,0.21);">
              <img src="{{ asset('public/assets/img/blog-1.webp') }}" alt="blog" style="width: 100%;">
              <p style="text-align: justify; text-indent: 30px; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eaque facere odio vitae quisquam illum rem sed amet, consequatur corrupti!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">        
        <div>
          <p style="text-align: center; margin-top: 20px;">
            <span style="font-size: 40px;"><i class="ri-arrow-left-s-fill"></i></span>
            <span style="font-size: 40px;"><i class="ri-arrow-right-s-fill"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
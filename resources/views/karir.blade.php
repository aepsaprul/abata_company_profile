@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="af-karir-page-title">
    <div class="container">
      <p>KARIR</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <div class="af-karir-page-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolorem assumenda perspiciatis, quod explicabo eius similique possimus hic in fugiat eveniet officia vel consequuntur rem placeat porro neque repellendus dignissimos. Distinctio odio saepe fugiat eos similique error voluptatibus. Doloribus, inventore? Quia maiores necessitatibus rem eveniet dolores? Dolores est veritatis beatae nobis nihil sequi qui ut consequatur voluptatem iusto quia eos consectetur quos harum repudiandae laborum explicabo aliquid officiis ea minima, suscipit vitae labore eveniet? Laboriosam ex aliquam ullam blanditiis quaerat nihil deleniti fugit cupiditate voluptates provident nobis accusamus, libero reprehenderit incidunt esse. Obcaecati facilis ex culpa dicta, sapiente ipsa inventore.</p>
            <h5>LOKER</h5>
            <div class="af-karir-loker">
              @foreach ($lokers as $item)
                <div class="af-list">
                  <img src="{{ url(env('APP_URL_ADMIN') . '/file/loker/' . $item->image) }}" alt="img loker">
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
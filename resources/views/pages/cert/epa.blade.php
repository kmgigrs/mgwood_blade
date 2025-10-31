<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'EPA - Certificate')
<!-- isi bagian konten -->
@section('content')
  <style>
    .splide__slide img {
      width: 100%;
      height: auto;
    }
  </style>
  <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
    <div class="bg-secondary m-5 container min-h-full">
      <h3 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        EPA
      </h3>
      <div class="mb-5">
        <section id="image-carousel" class="splide" aria-label="Beautiful Images">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="{{ asset('assets/images/cert/EPA/EPA.1.jpg') }}" alt="">
              </li>
              {{-- <li class="splide__slide"> <img src="{{ asset('assets/images/cert/EPA/EPAjklmn.2.jpg') }}" alt="">
              </li> --}}
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
  @push('page-scripts')
    <script>
      new Splide('#image-carousel').mount();
    </script>
  @endpush
@endsection

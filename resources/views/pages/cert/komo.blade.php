<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'KOMO - Certificate')
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
        KOMO
      </h3>
      <div class="mb-5">
        <!-- KOMO - Film Forming Coatings for Application on Timber -->
        <details class="collapse bg-base-400 my-5">
          <summary class="collapse-title text-xl font-medium">KOMO - Film Forming Coatings for Application on
            Timber</summary>
          <div class="collapse-content">
            <section id="image-carousel" class="splide" aria-label="Beautiful Images">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img src="{{ asset('assets/images/cert/KOMO/KOMO3320323.1.jpg') }}" alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img src="{{ asset('assets/images/cert/KOMO/KOMO3320323.2.jpg') }}" alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img src="{{ asset('assets/images/cert/KOMO/KOMO3320323.3.jpg') }}" alt="KOMO">
                  </li>
                </ul>
              </div>
            </section>
          </div>
        </details>
        <!-- KOMO - Fingerjointed Timber for Non-Load Bearing Applications -->
        <details class="collapse bg-base-400 my-5">
          <summary class="collapse-title text-xl font-medium">KOMO - Fingerjointed Timber for Non-Load Bearing
            Applications</summary>
          <div class="collapse-content">
            <section id="image-carousel2" class="splide" aria-label="Beautiful Images">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/Komo-fingerjoint timber-non-load-bearing-app-baru2024.1.jpg') }}"
                      alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/Komo-fingerjoint timber-non-load-bearing-app-baru2024.2.jpg') }}"
                      alt="KOMO">
                  </li>
                </ul>
              </div>
            </section>
          </div>
        </details>
        <!-- KOMO - COATING APPLICATION ON TIMBER AND SHEET MATERIAL -->
        <details class="collapse bg-base-400 my-5">
          <summary class="collapse-title text-xl font-medium">KOMO - Coating Application On Timber And Sheet
            Material</summary>
          <div class="collapse-content">
            <section id="image-carousel3" class="splide" aria-label="Beautiful Images">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/KOMO - Coating Application On Timber And Sheet Material/KOMO - Coating Application On Timber And Sheet Material.1.jpg') }}"
                      alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/KOMO - Coating Application On Timber And Sheet Material/KOMO - Coating Application On Timber And Sheet Material.2.jpg') }}"
                      alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/KOMO - Coating Application On Timber And Sheet Material/KOMO - Coating Application On Timber And Sheet Material.3.jpg') }}"
                      alt="KOMO">
                  </li>
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/KOMO - Coating Application On Timber And Sheet Material/KOMO - Coating Application On Timber And Sheet Material.4.jpg') }}"
                      alt="KOMO">
                  </li>
                </ul>
              </div>
            </section>
          </div>
        </details>
        <!-- KOMO - OPTIMIZED TIMBER FOR NON-LOAD BEARING APPLICATIONS -->
        <details class="collapse bg-base-400 my-5">
          <summary class="collapse-title text-xl font-medium">KOMO - Optimized Timber For Non-load Bearing
            Applications</summary>
          <div class="collapse-content">
            <section id="image-carousel4" class="splide" aria-label="Beautiful Images">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img
                      src="{{ asset('assets/images/cert/KOMO/KOMO - Optimized Timber For Non-load Bearing Applications/KOMO - Optimized Timber For Non-load Bearing Applications.1.jpg') }}"
                      alt="KOMO">
                  </li>
                </ul>
                <li class="splide__slide">
                  <img
                    src="{{ asset('assets/images/cert/KOMO/KOMO - Optimized Timber For Non-load Bearing Applications/KOMO - Optimized Timber For Non-load Bearing Applications.2.jpg') }}"
                    alt="KOMO">
                </li>
                </ul>
              </div>
            </section>
          </div>
        </details>
      </div>
    </div>
  </div>
  @push('page-scripts')
    <script>
      new Splide('#image-carousel').mount();
      new Splide('#image-carousel2').mount();
      new Splide('#image-carousel3').mount();
      new Splide('#image-carousel4').mount();
    </script>
  @endpush
@endsection

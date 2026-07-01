<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Event')
<!-- isi bagian konten -->
@section('content')
  <style>
    img.two {
      height: 90%;
      width: 90%;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 5px;
      width: 50%;
    }
  </style>
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        Event at
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>
      <h2 class="font-libre text-2xl md:text-3xl text-center  leading-tight text-primary mb-8 md:mb-4">
        <span class="font-extrabold block md:inline">
        10th ASEAN REGIONAL WORKSHOP ON TIMBER LEGALITY ASSURANCE AND TRACEABILITY
        </span>
      </h2>
      <!-- <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-4">
          <img class="w-full lg:h-full object-cover" src="{{ asset('assets/images/Event/coming_soon.jpg') }}"
            loading="lazy" />
        </div>
      </div> -->
    </div>

    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <!-- <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        Next Event at
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2> -->

      <!-- <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-4">
          <img class="w-full lg:h-full object-cover" src="{{ asset('assets/images/Event/flyer-web.jpg') }}"
            loading="lazy" />
      </div> -->

      <!-- ✅ VIDEO SECTION -->
<div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-5">
        <!-- <iframe
            id="ytplayer"
            class="absolute top-0 left-0 w-full h-full"
            src="https://www.youtube.com/embed/8hKiKLHMQGg?autoplay=1&mute=1&loop=1&playlist=8hKiKLHMQGg&controls=0&showinfo=0&modestbranding=1&rel=0&playsinline=1&enablejsapi=1"
            frameborder="0"
            allow="autoplay; fullscreen"
            allowfullscreen>
        </iframe> -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WasgHY2QN5I?si=7u7eiFF1Uwnzcp4L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

      <!-- <div class="w-10/14 lg:w-1/2">
        <div class="flex flex-col gap-4">
          
          <div><img src="{{ asset('assets/images/Event/flyer-web.jpg') }}"></div>
          <hr> 
          <div><img src="{{ asset('assets/images/Event/intermob.jpg') }}"></div>
        </div>
      </div> -->
    </div>
  </div>
@endsection

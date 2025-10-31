<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'White Prime')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">
    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        White Prime Product
      </h1>
      <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
          <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/2">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/fjl_board.jpg') }}" data-fancybox
                  data-caption="Finger Joint Laminated Board">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/products/whiteprime/1.jpeg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/fjl_board.jpg') }}" data-fancybox
                  data-caption="Finger Joint Laminated Board">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/products/whiteprime/3.jpeg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/fjl_board.jpg') }}" data-fancybox
                  data-caption="Finger Joint Laminated Board">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/products/whiteprime/4.jpeg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/fjl_board.jpg') }}" data-fancybox
                  data-caption="Finger Joint Laminated Board">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/products/whiteprime/5.jpeg') }}">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="card mt-5 max-w-full bg-slate-100 shadow-xl text-black">
        <div class="card-body">
          <h2 class="card-title">Specification</h2>
          <hr>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Paint</p>
            <ul class="list-disc list-inside">
              <li>KOMO Certified Paint for Outdoor “ALCO Prime”</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

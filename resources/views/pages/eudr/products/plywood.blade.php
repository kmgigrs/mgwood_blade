<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'EUDR Plywood')
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
        EUDR Plywood
      </h2>

      <div class="grid grid-cols-2 gap-1 p-2 place-items-center">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/1.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/2.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/3.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/4.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/5.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/6.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/7.jpeg') }}">
        <img class="hover:opacity-75" src="{{ asset('assets/images/eudr/gallery/8.jpeg') }}">
      </div>
      <div class="w-10/12 lg:w-1/2">
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="https://www.youtube.com/embed/BYkGi27OMz4?autoplay=1" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection

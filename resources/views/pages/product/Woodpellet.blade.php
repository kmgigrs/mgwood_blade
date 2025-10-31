<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Wood Pellet')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">
    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Wood Pellet
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/woodpellet/woodpellet.jpg') }}" loading="lazy" />
        </div>
      </div>
      <div class="mb-5 flex flex-col md:flex-row items-center">
        <div class="mb-5 md:mb-0 md:mr-5">
          <a href="https://reconpellet.com" target="_blank" class="btn btn-active btn-primary text-white">
            More About Wood Pellet
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

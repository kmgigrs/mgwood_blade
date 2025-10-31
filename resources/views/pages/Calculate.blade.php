<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Calculate Product')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        Calculate Product
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>
      </h3> -->
      <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-4">
          <img class="w-full lg:h-full object-cover" src="{{ asset('assets/images/Event/coming_soon.jpg') }}"
            loading="lazy" />
        </div>
      </div>
    </div>
  </div>
@endsection

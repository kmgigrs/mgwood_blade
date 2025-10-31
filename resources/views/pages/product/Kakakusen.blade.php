<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'KAKA Door Frame')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        KAKA Door Frame
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/kaka/homepage_kusen.png') }}" loading="lazy" />
        </div>
      </div>
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
          <div class="mb-5">
            <p class="font-semibold text-2xl">Material</p>
            <ul class="list-disc list-inside">
              <li>Finger Joint Laminated Board</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Certification</p>
            <ul class="list-disc list-inside">
              <li> <a href="/certificate/sni" target="_blank">SNI 01-6243.1-2000</a> </li>
              <li> <a href="/certificate/iso-9001" target="_blank">ISO 9001:2015</a> </li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Type</p>
            <ul class="list-disc list-inside">
              <li>Classic Type</li>
              <li>Single Rebate</li>
              <li>Double Rebate</li>
            </ul>
          </div>
          <div class="mb-5">
            <a href="https://kakadoor.com/product/kusen" class="btn btn-active btn-primary text-black"
              target="_blank">More about Kaka Door Frame</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

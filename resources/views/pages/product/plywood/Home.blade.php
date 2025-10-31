<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Plywood')
<!-- isi bagian konten -->
@section('content')
  <style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 5px;
      width: 50%;
    }
  </style>
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-6xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Plywood
      </h1>
      <div class="w-full lg:w-full h-full flex flex-col items-center justify-center">
        <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
          <div class="bg-secondary m-2 container min-h-full">
            <div>
              <div class="flex flex-row gap-10">
                <div class="basis-1/2">
                  <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug text-justify">
                    To meet FSC standards, PT KMGI implements a rigorous production process, from raw
                    material selection to the final stage. The wood used as raw material for plywood is
                    ensured to come from responsibly managed forests and has obtained FSC certification.
                    Additionally, PT KMGI optimizes energy use and reduces production waste to minimize
                    environmental impact.
                  </p>
                </div>
                <div class="basis-1/2">
                  <img src="{{ asset('assets/images/products/plywood-1.jpg') }}" alt="Lab" class=" center rounded"
                    style="width: 400px; height: 250px">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl z-0">
          <div class="grid grid-cols-2 gap-3 md:grid-cols-2 md:gap-3 lg:grid-cols-4 lg:gap-6 mb-10">
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/plywood/filmfaced2.jpeg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Film Face WBP Plywood</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/filmface-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/plywood/floorbased/Floorbase.jpg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Floor Base WBP Plywood</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/floorbase-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/plywood/marine/marine3.jpg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Marine Plywood BS 1088</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/marine-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/plywood/birch/Birch.jpeg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Birch Plywood</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/birch-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/wrapping-grade-plywood.jpg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Wrapping Grade Plywood</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/wrapping-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
              <img src="{{ asset('assets/images/products/plywood/ordinary/ordinary-plywood.jpg') }}" alt="Plywood"
                class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                <div class="grid grid-row-1 gap-4">
                  <div>
                    <p class="text-xl font-semibold">Ordinary Plywood</p>
                  </div>
                  <div class="flex items-center justify-end">
                    <a href="/product/plywood/ordinary-ply"
                      class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                      Product Information
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


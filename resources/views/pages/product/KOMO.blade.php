<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'KOMO')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        KOMO Certified Product (Finger Joint / Laminated)
      </h1>
      <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
          <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/gallery/multi-guna-wood-4.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/gallery/multi-guna-wood-5.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/gallery/multi-guna-wood-7.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/gallery/multi-guna-wood-8.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/products/komo/komo1.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/products/komo/komo2.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/products/komo/komo3.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="/assets/images/products/komo/komo4.jpg">
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
            <p class="font-semibold text-2xl">Glue</p>
            <ul class="list-disc list-inside">
              <li>D4 Komo Certified Glue</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Specie</p>
            <ul class="list-disc list-inside">
              <li>Dark Red Meranti</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

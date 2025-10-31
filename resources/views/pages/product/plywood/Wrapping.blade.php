<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Wrapping Grade Plywood')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Wrapping Grade Plywood
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/wrapping-grade-plywood.jpg') }}" loading="lazy" />
        </div>
      </div>
      <div class="card mt-5 max-w-full bg-slate-100 shadow-xl text-black">
        <div class="card-body">
          <h2 class="card-title">Specification</h2>
          <hr>
          For secondary process, surface wrapping
          <hr>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Certification of Quality</p>
            <ul class="list-disc list-inside">
              <li>CE2+</li>
              <li>JAS</li>
              <li>CARB</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Certification of Timber</p>
            <ul class="list-disc list-inside">
              <li>FSC</li>
              <li>SVLK</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Measurements</p>
            <ul class="list-none list-inside">
              <li>T : 3.4mm-3.7mm</li>
              <li>L : 4'</li>
              <li>L : 8'</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Glue Type</p>
            <ul class="list-disc list-inside">
              <li>MR</li>
              <li>MLIF</li>
              <li>PHENOL Low Formaldehyde</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Wood Core / Surface</p>
            <ul class="list-disc list-inside">
              <li>MLH</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Grade</p>
            <ul class="list-disc list-inside">
              <li>Overlay and Better MLH</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

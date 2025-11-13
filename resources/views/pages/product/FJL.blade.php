<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'FJL Board')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Finger Joint Laminated Board
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/Finger-Joint-Laminated-Board.jpg') }}" loading="lazy" />
        </div>
      </div>
      <div class="card mt-5 max-w-full bg-slate-100 shadow-xl text-black">
        <div class="card-body">
          <h2 class="card-title">Specification</h2>
          <hr>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Glue</p>
            <ul class="list-disc list-inside">
              <li>D4</li>
            </ul>
          </div>
          <div class="mb-5">
            <p class="font-semibold text-2xl">Specie</p>
            <ul class="list-disc list-inside">
              <li>Meranti</li>
              <li>Nyantoh</li>
              <!-- <li>Western Red Cedar</li> -->
              <li>Yellow Cedar</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

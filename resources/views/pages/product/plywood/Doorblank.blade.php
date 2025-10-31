<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Birch Plywood')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Doorblank Plywood
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/Doorblank.jpeg') }}" loading="lazy" />
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>Criteria</th>
              <th>Specification</th>
            </tr>
          </thead>
          <tbody class="text-black">
            <tr>
              <td>THICKNESS</td>
              <td>44mm</td>
            </tr>
            <tr>
              <td>WIDTH</td>
              <td>915/1220</td>
            </tr>
            <tr>
              <td>LENGTH</td>
              <td>2135/2440</td>
            </tr>
            <tr>
              <td>GLUE</td>
              <td>T1/MELAMIN</td>
            </tr>
            <tr>
              <td>SPECIES</td>
              <td>FALCATA</td>
            </tr>
            <tr>
              <td>STANDART</td>
              <td>CARB - US EPA</td>
            </tr>
            <tr>
              <td>GRADE</td>
              <td>BB/BB</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

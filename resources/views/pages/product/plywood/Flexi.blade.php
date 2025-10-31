<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Flexi Plywood')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Flexi Plywood
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[75vh] lg:max-h-[60vh]"
            src="{{ asset('assets/images/products/flexi.jpg') }}" loading="lazy" />
        </div>
        {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>Specification</th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <tr>
                            <td>THICKNESS</td>
                            <td>8/9/12/18 mm</td>
                        </tr>
                        <tr>
                            <td>WIDTH</td>
                            <td>1220/1230/1250</td>
                        </tr>
                        <tr>
                            <td>LENGTH</td>
                            <td>2440/2500</td>
                        </tr>
                        <tr>
                            <td>GLUE</td>
                            <td>WBP</td>
                        </tr>
                        <tr>
                            <td>SPECIES</td>
                            <td>MIX HARDWOOD</td>
                        </tr>
                        <tr>
                            <td>COLOR</td>
                            <td>DARK BROWN</td>
                        </tr>
                        <tr>
                            <td>STANDARD</td>
                            <td>CE 2+</td>
                        </tr>
                        <tr>
                            <td>GRADE</td>
                            <td>G2S/G1S</td>
                        </tr>
                    </tbody>
                </table> --}}
      </div>
    </div>
  </div>
@endsection

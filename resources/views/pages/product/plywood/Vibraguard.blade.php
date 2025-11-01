<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Vibraguard')
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
   <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">
    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Vibraguard
      </h1>
      <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
        <div class="grid grid-cols-2 gap-1 p-2 place-items-center">
          <img class="hover:opacity-75" src="{{ asset('assets/images/products/plywood/vibraguard/1c.jpg') }}">
          <img class="hover:opacity-75" src="{{ asset('assets/images/products/plywood/vibraguard/2c.jpg') }}">
          <img class="hover:opacity-75" src="{{ asset('assets/images/products/plywood/vibraguard/3c.jpg') }}">
        </div>
      </div>
      <div class="card mt-5 max-w-full bg-slate-100 shadow-xl text-black">
        <div class="card-body">
          <h2 class="card-title">Specification</h2>
          <hr>
          <div class="mb-5">
  
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
                  <td>21 mm</td>
                </tr>
                <tr>
                  <td>WIDTH</td>
                  <td>1220</td>
                </tr>
                <tr>
                  <td>LENGTH</td>
                  <td>2440</td>
                </tr>
                <tr>
                  <td>GLUE</td>
                  <td>WBP</td>
                </tr>
                <tr>
                  <td>SPECIES</td>
                  <td>MERANTI</td>
                </tr>
                <tr>
                  <td>STANDARD</td>
                  <td>CE 2+</td>
                </tr>
                <tr>
                  <td>GRADE</td>
                  <td>MULTI MARINE,ECO MARINE</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

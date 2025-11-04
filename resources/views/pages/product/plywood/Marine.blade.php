<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Marine Plywood BS 1088')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-5xl my-5">
    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Marine Plywood BS1088
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[80vh] lg:max-h-[65vh]"
            src="{{ asset('assets/images/products/plywood/marine/marine3.jpg') }}" loading="lazy" />
        </div>
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[80vh] lg:max-h-[65vh]"
            src="{{ asset('assets/images/products/plywood/marine/marine4.jpg') }}" loading="lazy" />
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
              <td>6/9/12/15/18/21/25 mm</td>
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
              <td>BS1088</td>
            </tr>
            <tr>
              <td>GRADE</td>
              <td>MARINE</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <div class="w-10/10">
        <p class="font-mont text-accent text-md text-left mb-4">
          Our Marine Plywood FSC BS1088, proudly made in Indonesia, meets the international BS1088 marine 
          grade standard for superior strength and water resistance. As a trusted Marine Plywood Indonesia 
          manufacturer, we use high-quality hardwood and waterproof bonding to ensure long-lasting performance. 
          Certified by the Forest Stewardship Council (FSC), our plywood is sourced responsibly and built to endure 
          harsh marine and humid environments—ideal for boat building, coastal structures, and outdoor applications.
        </p>
      </div>
      </div>
      </div>
  </div>
@endsection

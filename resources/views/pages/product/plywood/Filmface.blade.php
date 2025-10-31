<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Film Face Plywood')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-5xl my-5">

    <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Film Face Plywood
      </h1>
      <div class="flex w-full flex-col md:flex-row">
        <div class="w-full mx-0 md:mx-2 my-4 md:my-0">
          <img class="object-contain h-full w-full max-h-[80vh] lg:max-h-[55vh]"
            src="{{ asset('assets/images/products/plywood/filmfaced/filmfaced4.jpg') }}" loading="lazy" />
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
              <td>1220/1250</td>
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
              <td>HEAVY TYPE MLH</td>
            </tr>
            <tr>
              <td>STANDARD</td>
              <td>CE 2+</td>
            </tr>
            <tr>
              <td>FILM DENSITY</td>
              <td>165 GRAM/M2</td>
            </tr>
          </tbody>
        </table>
      </div>

      {{-- <div class="w-full lg:w-full h-full flex flex-col items-center justify-center">
        <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
          <div class="bg-secondary m-5 container min-h-full">
            <div class="flex flex-row gap-2">
              <div class="basis-1/2 p-10">
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-left mb-5">
                  Film faced plywood has become an indispensable material in the construction industry,
                  particularly in Indonesia. It's durability, versatility, and resistance to moisture make
                  it an ideal choice for various applications. In this article, we will delve into the
                  world of film faced plywood, exploring its benefits, types, and applications in the
                  Indonesian market.
                </p>
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-left">Film
                  faced plywood is a type of plywood that has a thin layer of phenolic or melamine film
                  laminated onto its surface. This film provides a smooth, waterproof, and durable finish,
                  making it resistant to wear and tear. The core of the plywood is typically made from
                  hardwood or softwood veneers, which are bonded together with strong adhesives.
                </p>
              </div>
              <div class="basis-1/2">
                <img src="{{ asset('assets/images/products/plywood/filmfaced/filmfaced2.jpg') }}"
                  class="object-scale-down max-h-full drop-shadow-md rounded-md m-auto w-[380px]">
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>

    {{-- <div class="bg-secondary m-5 container min-h-full">
      <h1 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Benefit of Film Faced Plywood
      </h1>
      <div class="w-full lg:w-full h-full flex flex-col items-center justify-center">
        <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
          <div class="bg-secondary m-5 container min-h-full">
            <ul class="list-disc">
              <li>
                <p class="italic font-bold">Durability
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-justify mb-5">
                  Film faced plywood is highly durable and can withstand harsh weather conditions, making
                  it suitable for both indoor outdoor applications.
                </p>
                </p>
              </li>
              <li>
                <p class="italic font-bold">Water Resistance
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-ljustify mb-5">
                  The phenolic or melamine film provides excellent water resistance, making it ideal for
                  use in wet environments such as bathrooms and kitchens.
                </p>
                </p>
              </li>
              <li>
                <p class="italic font-bold">Smooth Surface
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-ljustify mb-5">
                  The smooth surface of film faced plywood makes it easy to clean and maintain.
                </p>
                </p>
              </li>
              <li>
                <p class="italic font-bold">Versatility
                <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-ljustify mb-5">
                  Film faced plywood can be used for a wide range of applications, including
                  formwork,flooring, wallpaneling, and furniture
                </p>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-5">
          <x-heroicon-o-arrow-path-rounded-square style="width: 150px; height: 120px" />
        </div>
      </div>
      <div class="w-10/12">
        <p class="font-mont text-accent text-md text-left mb-4">
          When choosing film faced plywood, it is important to consider the specific application
          and the required level of durability and water resistance. Factors such as the thickness of
          the plywood, the type of film, and the core material should also be taken into account.
        </p>
      </div>
    </div>
  </div>
@endsection

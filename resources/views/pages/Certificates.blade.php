<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Certificate')
<!-- isi bagian konten -->
@section('content')
  <div class="w-full h-full flex flex-col justify-center mx-auto max-w-7xl my-5">
    <div class="bg-secondary m-5 container min-h-full">
      <h3 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Our Certificate
      </h3>
      <p class="font-mont lg:mx-0 text-sm md:text-lg text-primary leading-snug font-light my-2">
        Kayu Multiguna Indonesia is one of Indonesia’s leading integrated wooden
        companies that produces and markets high-quality wood products. Kayu
        Multiguna Indonesia was incorporated in 1996 and located in Gresik, East
        Java, Indonesia.
      </p>
      <div class="mx-5">
        <div class="grid grid-cols-3 md:grid-cols-7 gap-5">
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">CARB</div>
              <div>
                <a href="/cert/carb" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">CE</div>
              <div>
                <a href="/cert/ce" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">EPA</div>
              <div>
                <a href="/cert/epa" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">FSC</div>
              <div>
                <a href="/cert/fsc" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">FSC COC</div>
              <div>
                <a href="/cert/fsc-coc" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">JAS</div>
              <div>
                <a href="/cert/jas" class="btn text-black hover:text-white text-sm">Learn More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">Marine Plywood</div>
              <div>
                <a href="/cert/marine-plywood" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">SVLK</div>
              <div>
                <a href="/cert/svlk" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">PEFC</div>
              <div>
                <a href="/cert/pefc" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">KOMO</div>
              <div>
                <a href="/cert/komo" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">SNI</div>
              <div>
                <a href="/cert/sni" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">ISO-9001</div>
              <div>
                <a href="/cert/iso-9001" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">UKCA</div>
              <div>
                <a href="/cert/ukca" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
          <div class="bg-gray-100 text-black rounded-md font-mont text-center font-bold">
            <div class="grid grid-rows-2  p-5">
              <div class="text-2xl">Wood Pellet</div>
              <div>
                <a href="/cert/wood-pellet" class="btn text-black hover:text-white text-sm">Learn
                  More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-3 gap-3 md:grid-cols-5 md:gap-5 lg:grid-cols-8 lg:gap-8 mx-4 lg:mx-0 my-4">
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/carb.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/epa.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/CE2-.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/FSC-TM.jpeg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/em.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/scfn-1.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/pefc.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/sni-1.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/sucobr.jpg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/1200px-UKCA_black_fill.png') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/sucofindo2.jpeg') }}" loading="lazy" />
          </div>
        </div>
        <div class="text-primary">
          <div>
            <img class="w-full lg:h-full object-contain aspect-square"
              src="{{ asset('/assets/images/cert/thumbnail/Logo_KOMO_XL_RGB-300x300.jpg') }}" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

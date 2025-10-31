<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Our Products')
<!-- isi bagian konten -->
@section('content')
  <h2 class="font-libre text-2xl md:text-3xl text-center leading-tight text-primary mt-8">
    Products of
    <span class="font-extrabold block md:inline">
      Kayu Multiguna Indonesia
    </span>
  </h2>
  <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
    <div class="bg-secondary m-5 container min-h-full">
      <div class="mb-5">
        <p class="font-mont lg:mx-0 text-xl md:text-lg text-primary leading-snug my-2 text-justify">
          Kayu Multiguna Indonesia is one of Indonesia’s leading integrated wooden companies that produces and
          markets high-quality wood products. Kayu Multiguna Indonesia was incorporated in 1996 and located in
          Gresik, East Java, Indonesia.
        </p>
      </div>
      <div class="mb-5">
        <div>
          <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl z-0">
            <h2 class="mt-6 font-libre flex flex-col text-3xl text-left leading-tight text-primary my-1 font-extrabold">
              Our Products
            </h2>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-3 lg:grid-cols-4 lg:gap-6 mb-10">
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/plywood-1.jpg') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">Plywood</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/plywood"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/whiteprime/White-prime-product.png') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">White Prime Product</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/white-prime"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/komo/komo2.jpg') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">KOMO Certified Product</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/komo-certified-product"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/woodpellet/woodpellet.jpg') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">Wood Pellet</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/wood-pellet"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/Finger-Joint-Laminated-Board.jpg') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">Finger Joint Laminated Board</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/finger-joint-laminated-board"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/Pakuwon_City_Brisbane.jpeg') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">KAKA Door</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/kaka-door"
                        class="bg-black hover:bg-gray-200 hover:text-black text-white font-bold font-mont py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Product Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative w-64 h-64 rounded-md overflow-hidden shadow-xl">
                <img src="{{ asset('assets/images/products/L type_00002.png') }}" alt="Plywood"
                  class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-50 text-black p-4">
                  <div class="grid grid-row-1 gap-4">
                    <div>
                      <p class="text-xl font-semibold">KAKA Door Frame</p>
                    </div>
                    <div class="flex items-center justify-end">
                      <a href="product/kaka-kusen"
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
  </div>
  <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
    <div class="bg-secondary m-5 container min-h-full">
      <h3 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Quality Assurance
      </h3>
      <div class="mb-5">
        <div class="flex flex-row gap-2">
          <div class="basis-1/2">
            <p class="font-mont lg:mx-0 text-lg md:text-lg text-primary leading-snug my-2 lg:text-justify text-left">
              We ensure that every product we produce undergoes a strict quality control process. From raw
              material assessment to in-process control, we ensure that the highest quality standards are
              well-maintained.
            </p>
            <p class="font-mont lg:mx-0 text-lg md:text-lg text-primary leading-snug my-2 lg:text-justify text-left">
              In addition, we carry out various tests using international standards BS, JAS, EPA, CE, US EPA
              to ensure our products meet global requirements. Even after the product is finished, we continue
              with the grading process to ensure consistent quality.
            </p>
            <p class="font-mont lg:mx-0 text-lg md:text-lg text-primary leading-snug my-2 lg:text-justify text-left">
              We are committed to delivering high quality products to our customers, focusing on their
              satisfaction and trust.
            </p>
          </div>
          <div class="basis-1/2">
            <img src="{{ asset('assets/images/lab/lab1.jpg') }}" alt="Lab" class="my-2">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--LAB TESTING-->
  <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
    <div class="bg-secondary m-5 container min-h-full">
      <h3 class="font-libre font-extrabold flex flex-col text-3xl text-left leading-tight text-primary my-1">
        Lab Testing
      </h3>
      <div class="mb-5 p-5">
        <div class="grid grid-rows-4 grid-flow-col gap-4">
          <div>
            <h3 class="font-libre font-extrabold flex flex-col text-left text-xl leading-tight text-primary my-1">
              Water Boil Test</h3>
            <div class="flex mx-5 my-5">
              <p
                class="font-mont text-lg md:text-left md:text-lg text-primary leading-snug lg:text-justify text-left mr-5">
                The Water Boil Proof (WBP) test is an important test to determine the strength and
                resistance of
                plywood to water and moisture. This test is conducted by boiling a plywood sample in water
                for
                several hours to simulate humid or wet environmental conditions. Our plywood passes the 72
                hour WBP
              </p>
              <img src="{{ asset('assets/images/lab/water_boiled_test.jpg') }}" alt="WBP" width="340px"
                height="550px">
            </div>
          </div>
          <div>
            <h3 class="font-libre font-extrabold flex flex-col text-left text-xl leading-tight text-primary my-1">
              Bonding Test</h3>
            <div class="flex mx-5 my-5">
              <p
                class="font-mont text-lg md:text-left md:text-lg text-primary leading-snug lg:text-justify text-left mr-5">
                Bonding test on plywood is an important process to test the strength and quality of adhesion
                between the layers of wood that make up the plywood. In this test, a sample of plywood is
                subjected to pressure or tensile force to test how well the adhesive adheres to the layers
                of wood.
              </p>
              <img src="{{ asset('assets/images/lab/bonding_test.jpg') }}" alt="WBP" width="340px"
                height="550px">
            </div>
          </div>
          <div>
            <h3 class="font-libre font-extrabold flex flex-col text-left text-xl leading-tight text-primary my-1">
              Bending Test</h3>
            <div class="flex mx-5 my-5">
              <p
                class="font-mont text-lg md:text-left md:text-lg text-primary leading-snug lg:text-justify text-left mr-5">
                Bending test on plywood is a test to evaluate the strength and stiffness of the material
                when given a bending load. A sample of plywood is loaded at its center to cause bending, and
                the material's response to the load is measured. The aim is to ensure that the plywood has
                adequate strength and stiffness for various applications, such as building construction and
                furniture manufacturing.
              </p>
              <img src="{{ asset('assets/images/lab/bending_test.jpg') }}" alt="WBP" width="340px"
                height="550px">
            </div>
          </div>
          <div>
            <h3 class="font-libre font-extrabold flex flex-col text-left text-xl leading-tight text-primary my-1">
              Emission Test</h3>
            <div class="flex mx-5 my-5">
              <p
                class="font-mont text-lg md:text-left md:text-lg text-primary leading-snug lg:text-justify text-left mr-5">
                The Emissions Test on plywood is a test to evaluate
                the amount of chemicals released by the plywood material into the surrounding air. These
                chemicals include formaldehyde. The aim is to ensure that the plywood meets the emission
                standards set for the safety and health of users.
              </p>
              <img src="{{ asset('assets/images/lab/emission_test.jpg') }}" alt="WBP" width="340px"
                height="550px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Home - Kayu Multiguna')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-image h-[calc(75vh)] md:h-[calc(50vh)] lg:h-[calc(100vh-64px)]">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl">
      <div class="w-full lg:w-3/5 h-full flex flex-col items-center justify-center">
        <h1
          class="font-libre flex flex-col text-2xl md:text-5xl lg:text-5xl text-center leading-tight md:leading-tight lg:leading-tight text-white my-1">
          <span class="font-extrabold">
            <span>We produce </span>
            <span class="italic font-medium">high-quality </span>
          </span>
          <span>wooden based products</span>
        </h1>
        <p class="font-mont text-center mx-5 md:mx-10 lg:mx-0 text-sm md:text-lg text-white leading-snug font-light my-2">
          Kayu Multiguna Indonesia is one of Indonesia’s leading
          integrated wooden companies that produces and markets
          high-quality wood products, like Marine Plywood, FSC Plywood, Film Faced Plywood and many others. Kayu
          Multiguna Indonesia was
          incorporated in 1996 and located in Gresik, East Java,
          Indonesia.
        </p>

        <a href="/contact-us"
          class="btn btn-lg btn-wide text-lg my-2 font-mont font-semibold drop-shadow-lg hover:bg-white hover:text-black z-0 text-white rounded-xl m-6 border-2">Contact
          Us</a>

        <!-- EVENT BANNER  -->
        {{-- <a href="/event"><img class="mt-5" src="{{ asset('assets/images/Event/woodshow_panjang_ongoing.png') }}" /></a> --}}
      </div>
    </div>
  </div>
  <div class="bg-gray-950">
    <div class="pt-8 lg:pt-16 w-1/2 mr-auto ml-0 md:ml-auto md:mr-0"></div>

    <div class="w-full h-full flex flex-col md:flex-row items-center justify-center mx-auto max-w-7xl">
      <div class="w-full lg:w-1/2 m-8 h-full lg:h-96 flex flex-col items-start justify-center">
        <h2 class="mx-4 md:mx-0 font-libre flex flex-col text-xl lg:text-3xl text-left leading-tight text-white my-1">
          <span class="font-extrabold">Indonesia’s leading</span>
          <span class="font-extrabold">integrated wooden companies</span>
        </h2>
        <p class="mx-4 md:mx-0 font-mont text-left text-base lg:text-lg text-white leading-snug font-light my-2">
          We strive to create a wide variety of wooden base product.
          Optimizing the usage of wooden raw materials, we created not
          just a wide variety of main product but derivative product
          as well.
        </p>

        <a href="/about-us"
          class="mx-4 md:mx-0 btn btn-outline btn-secondary text-white my-2 font-mont font-semibold rounded-xl">
          More About Us</a>
      </div>
      <div class="w-full lg:w-1/2 h-full lg:h-96 flex flex-col items-center justify-center">
        <img class="w-full lg:h-full object-cover mb-5 md:mb-0" src="{{ asset('assets/images/homepage/factory_3.jpg') }}"
          loading="lazy" />
      </div>
    </div>

    <div class="py-4 lg:py-8 w-1/2 ml-auto md:mr-auto md:ml-0"></div>
  </div>

<!-- === Simple Slider Section (No JS) === -->
<div class="w-full flex justify-center mx-auto max-w-7xl my-10">
  <div class="bg-[#f0eae3] rounded-lg p-6 flex flex-col lg:flex-row items-center gap-8 shadow-sm">

    <!-- Input radio untuk kontrol slide -->
    <input type="radio" name="slider" id="slide1" checked class="hidden">
    <input type="radio" name="slider" id="slide2" class="hidden">

    <!-- Wrapper semua slide -->
    <div class="slides relative w-full transition-all duration-500">
      
      <!-- Slide 1 -->
       <div class="slide absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out peer-checked:opacity-100" id="content1">
        <div class="flex flex-col lg:flex-row items-center gap-8">
          <img src="{{ asset('assets/images/products/plywood/marine/marine3.jpg') }}" class="w-full lg:w-[420px] h-[260px] object-cover rounded-md" alt="Marine Ply">
          <div>
            <h2 class="text-2xl font-semibold text-primary mb-3">Marine Plywood Indonesia</h2>
            <p class="text-primary mb-4 font-mont max-w-[600px]">Our FSC-certified Marine Plywood Indonesia meets the BS1088 standard for strength and water resistance. Made from premium hardwood, it’s built to endure marine and humid environments—ideal for coastal projects and outdoor use.</p>
            <a href="/product/plywood/marine-ply" class="inline-block border border-primary text-primary px-4 py-2 rounded hover:bg-primary hover:text-white transition">View Product</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out peer-checked:opacity-100" id="content2">
        <div class="flex flex-col lg:flex-row items-center gap-8">
          <img src="{{ asset('assets/images/products/plywood/ordinary/ordinary-plywood.jpg') }}" class="w-full lg:w-[420px] h-[260px] object-cover rounded-md" alt="Ordinary Ply">
          <div>
            <h2 class="text-2xl font-semibold text-primary mb-3">Plywood FSC Indonesia</h2>
            <p class="text-primary mb-4 font-mont max-w-[600px]">Our FSC Indonesian Plywood is engineered for consistent quality and performance in industrial, furniture, and construction applications. Made from responsibly sourced tropical hardwood, it ensures durability for both indoor and outdoor projects.</p>
            <a href="/product/plywood/ordinary-ply" class="inline-block border border-primary text-primary px-4 py-2 rounded hover:bg-primary hover:text-white transition">View Product</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol navigasi -->
    <div class="flex justify-center gap-4 mt-72 lg:mt-60">
      <label for="slide1" class="w-3 h-3 bg-gray-400 rounded-full cursor-pointer hover:bg-primary"></label>
      <label for="slide2" class="w-3 h-3 bg-gray-400 rounded-full cursor-pointer hover:bg-primary"></label>
    </div>
  </div>
</div>

<!-- === Tambahan CSS sederhana === -->
<style>
  /* tampilkan slide aktif */
  #slide1:checked ~ .slides #content1,
  #slide2:checked ~ .slides #content2 {
    opacity: 1;
    position: relative;
    z-index: 1;
  }

  /* sembunyikan slide tidak aktif */
  #slide1:checked ~ .slides #content2,
  #slide2:checked ~ .slides #content1 {
    opacity: 0;
    position: absolute;
    z-index: 0;
    pointer-events: none;
  }

  /* aktifkan klik pada slide aktif */
  #slide1:checked ~ .slides #content1 a,
  #slide2:checked ~ .slides #content2 a {
    pointer-events: auto;
  }
</style>

<!-- JS untuk auto slide -->
<script>
  const slides = document.querySelectorAll('input[name="slider"]');
  let index = 0;

  function nextSlide() {
    slides[index].checked = false;
    index = (index + 1) % slides.length;
    slides[index].checked = true;
  }

  setInterval(nextSlide, 5000); // ganti 5000 jadi 3000 kalau mau lebih cepat
</script> 

<!-- ✅ Tambahkan script pause-on-hover di SINI -->
<script>
  // let timer = setInterval(nextSlide, 5000);

  // document.querySelector(".slides").addEventListener("mouseenter", () => clearInterval(timer));
  // document.querySelector(".slides").addEventListener("mouseleave", () => {
  //   timer = setInterval(nextSlide, 5000);
  // });
</script>

  {{-- Products --}}
  <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl z-0">
    <h2 class="mt-6 font-libre flex flex-col text-3xl text-left leading-tight text-primary my-1 font-extrabold">
      Our Products
    </h2>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-2 md:gap-3 lg:grid-cols-4 lg:gap-6 mb-10">
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
    <a href="/products" class="btn btn-active btn-primary my-2 font-mont font-semibold text-black rounded-xl">
      About Our Products
    </a>
  </div>

  {{-- Certificate --}}
  <div class="">
    <div
      class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-6 md:min-h-[25vh] lg:min-h-[75vh]">
      <div class="w-full flex flex-col-reverse md:flex-row">
        <div class="w-full md:w-2/5 my-auto">
          {{-- Certificate --}}
          <div class="grid grid-cols-5 md:grid-cols-5 lg:grid-cols-5 px-4 md:px-0 my-4 md:my-auto md:ml-4 lg:my-0 mb-6">
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/carb.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/CE2-.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/epa.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/FSC-TM.jpeg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/jas.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/em.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/scfn-1.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/pefc.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/sni-1.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/sucobr.jpg') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/1200px-UKCA_black_fill.png') }}" loading="lazy" />
            </div>
            <div class="text-primary">
              <img class="w-full lg:h-full object-contain aspect-square"
                src="{{ asset('assets/images/cert/thumbnail/sucofindo2.jpeg') }}" loading="lazy" />
            </div>
          </div>
          <div class="bg-white border-t-8 border-primary py-4 lg:py-8 w-1/2 ml-auto md:mr-auto md:ml-0 md:hidden">
          </div>
        </div>

        <div class="w-full md:w-3/5 pl-auto md:pl-4 md:mr-4 lg:pl-16 my-auto">
          <div class="bg-white border-b-8 border-primary pt-8 lg:pt-16 w-1/2 mr-auto ml-0 md:ml-auto md:mr-0 md:hidden">
          </div>

          <h3
            class="font-libre mx-4 lg:mx-0 font-extrabold flex flex-col text-xl lg:text-3xl text-left leading-tight text-primary lg:my-1 mt-6 md:mt-0 lg:mt-1">
            High-Quality Product with International Standard
          </h3>
          <p class="mx-4 lg:mx-0 font-mont text-left text-base lg:text-lg text-primary leading-snug font-light my-2">
            We strive to create a wide variety of wooden base
            product. Optimizing the usage of wooden raw materials,
            we created not just a wide variety of main product but
            derivative product as well.
          </p>

          <a href="/certificates"
            class="btn btn-active btn-primary my-2 mx-4 lg:mx-0 font-mont font-semibold text-white">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Portofolio --}}
  <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-6">
    <h3
      class="font-libre font-extrabold flex flex-col text-3xl text-center leading-tight text-primary my-1 mx-4 lg:mx-0">
      Our Trusted Customers
    </h3>
    <section id="image-carousel" class="splide" aria-label="Beautiful Images">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="{{ asset('assets/images/portfolio/cust1.jpg') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('assets/images/portfolio/cust2.jpg') }}" alt="">
          </li>
        </ul>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  @push('page-scripts')
    <script>
      new Splide('#image-carousel').mount();
    </script>
  @endpush
@endsection

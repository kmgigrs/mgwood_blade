<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'About Us')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        About
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>
      <div class="w-10/12 lg:w-1/2">
        <p class="font-mont text-accent text-left mb-4 lg:hidden">
          <span class="font-bold">PT. Kayu Multiguna Indonesia</span>, your trusted partner for high-quality and
          sustainable wood products. Established in 1996, we have been dedicated to delivering exceptional wood
          solutions while prioritizing environmental sustainability. With a strong commitment to quality
          craftsmanship
          and responsible sourcing, we aim to provide our customers with the finest wood products that meet their
          needs.
        </p>
      </div>
      <h3 class="font-mont text-lg text-primary text-center mb-8 lg:mb-4 w-full lg:w-3/4 hidden lg:block">
        <span class="font-bold">PT. Kayu Multiguna Indonesia</span>, your trusted partner for high-quality and
        sustainable wood products. Established in 1996, we have been dedicated to delivering exceptional wood
        solutions while prioritizing environmental sustainability. With a strong commitment to quality craftsmanship
        and responsible sourcing, we aim to provide our customers with the finest wood products that meet their
        needs.
      </h3>
      <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-4">
          <img class="w-full lg:h-full object-cover" src="{{ asset('assets/images/pabrik-2.jpg') }}" loading="lazy" />
        </div>
        <p class="font-mont text-accent text-left mb-4">
          At PT KMGI, we understand the importance of sustainability in today's world. That's why we have embraced
          the concept of "zero waste" in our operations. From the utilization of raw log materials to the creation
          of various wood products, we ensure that every part of the wood is utilized efficiently. Even the
          leftover wood materials are repurposed to create other valuable products.
        </p>
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-4">
          <img class="w-full lg:h-full object-cover" src="{{ asset('assets/images/gallery/multi-guna-wood-10.jpg') }}"
            loading="lazy" />
        </div>
        <p class="font-mont text-accent text-left mb-4">
          As part of our commitment to sustainability, we are proud to announce that our wood products hold the
          prestigious Forest Stewardship Council (FSC) Certification. The FSC Certification serves as a testament
          to our dedication to responsible forest management and the preservation of biodiversity. By choosing PT
          KMGI's FSC-certified products, our customers can have confidence in the environmentally friendly and
          socially responsible origin of their wood products.
        </p>
      </div>
      <h3 class="font-mont text-2xl text-primary text-center w-full lg:w-3/4 my-8 md:my-4">
        <span class="font-bold italic">
          "The market always evolves. We will never stop evolving with them."
        </span>
      </h3>
      <div class="w-10/12 lg:w-1/2">
        <p class="font-mont text-accent text-left mb-4">
          For more information about our FSC-certified products and our range of wood solutions, please contact
          us.
        </p>
      </div>
      <a href="/contact-us" class="btn font-mont btn-xl btn-active bg-black rounded-xl text-white my-4 lg:my-0">Contact Us
        Now</a>
    </div>
  </div>
@endsection

<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Gallery')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        Gallery of
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>

      {{-- Frame Video --}}
      {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8DQmg9tufoc?si=a2NXfRB7kBPDF88D"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe> --}}
      <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
          <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/fjl_board.jpg') }}" data-fancybox
                  data-caption="Finger Joint Laminated Board">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/fjl_board.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/gurjan-veneer03161175354.jpg') }}" data-fancybox
                  data-caption="Gurjan Veneer">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/gurjan-veneer03161175354.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image3.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image3.jpg') }}">
                </a>
              </div>
            </div>
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image5.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image5.jpg') }}">
                </a>
              </div>
            </div> --}}
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image6.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image6.jpg') }}">
                </a>
              </div>
            </div>
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image8.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image8.jpg') }}">
                </a>
              </div>
            </div> --}}
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image10.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image10.jpg') }}">
                </a>
              </div>
            </div> --}}
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image8.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image8.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/image13.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/image13.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/IMG_0890.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/IMG_0890.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/IMG_9115.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/IMG_9115.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/imported-gurjan-face-veneer-500x500.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/imported-gurjan-face-veneer-500x500.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/kayu1.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/kayu1.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/kayu2.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/kayu2.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/log1.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/log1.jpg') }}">
                </a>
              </div>
            </div>
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/log2.jpg') }}" data-fancybox data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/log2.jpg') }}">
                </a>
              </div>
            </div> --}}
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-1.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-1.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-2.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-2.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-3.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-3.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-4.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-4.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-5.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-5.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-6.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-6.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-7.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-7.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-8.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-8.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-9.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-9.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-10.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/multi-guna-wood-10.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/KMGI-13072023-09.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/KMGI-13072023-01.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/KMGI-13072023-02.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/KMGI-13072023-02.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/multi-guna-wood-09.jpg') }}" data-fancybox
                  data-caption="Plywood">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/KMGI-13072023-09.jpg') }}">
                </a>
              </div>
            </div>
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/product_kaka/1.png') }}" data-fancybox
                  data-caption="KAKA Door">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/product_kaka/1.png') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/product_kaka/10.png') }}" data-fancybox
                  data-caption="KAKA Door">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/product_kaka/10.png') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/product_kaka/3.png') }}" data-fancybox
                  data-caption="KAKA Door">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/product_kaka/3.png') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/product_kaka/4.png') }}" data-fancybox
                  data-caption="KAKA Door">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/product_kaka/4.png') }}">
                </a>
              </div>
            </div> --}}
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/wood_pellet/1.jpg') }}" data-fancybox
                  data-caption="Wood Pellet">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/wood_pellet/1.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/logkayu2.jpg') }}" data-fancybox
                  data-caption="Wood Pellet">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/logkayu2.jpg') }}">
                </a>
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/logkayu3.jpg') }}" data-fancybox
                  data-caption="Wood Pellet">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/logkayu3.jpg') }}">
                </a>
              </div>
            </div>
            {{-- <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <a href="{{ asset('/assets/images/gallery/product_kaka/7.png') }}" data-fancybox
                  data-caption="KAKA Door">
                  <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="{{ asset('/assets/images/gallery/product_kaka/7.png') }}">
                </a>
              </div>
            </div> --}}

          </div>
        </div>
      </section>
    </div>
  </div>
  @push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <script>
      Fancybox.bind("[data-fancybox]", {
        // Your custom options
      });
    </script>
  @endpush
@endsection

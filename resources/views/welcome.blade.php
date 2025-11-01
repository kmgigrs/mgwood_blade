<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta head-key="robots" name="robots"
    content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta head-key="description" name="description"
    content="Kayu Multiguna Indonesia is one of Indonesia’s leading integrated wooden companies that produces and markets high-quality wood products. Kayu Multiguna Indonesia was incorporated in 1996 and located in Gresik, East Java, Indonesia. Based on the meaning of companies’ name of" />
  <meta name="keywords" content="marine plywood,fsc plywood" />
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MJ5C62FRZ0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MJ5C62FRZ0');
  </script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9921002367735797"
    crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

  {{-- toastr --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  <style>
    .bg-image {
      background-image: linear-gradient(30deg,
          rgba(0, 0, 0, 0.75),
          rgba(0, 0, 0, 0.5)),
        url("../../assets/images/homepage/factory_2.jpg");
      /* url("../../assets/images/20220818_163731.jpg"); */
      background-attachment: fixed;
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
      /* Resize the background image to cover the entire container */
    }

    .banner {
      position: fixed;
      width: 30px;
      height: 30px;
      bottom: 40px;
      right: 100px;
    }
  </style>
  @vite('resources/css/app.css')
</head>

<body>
  @include('components.Navbar')
  @yield('content')
  @include('components.Footer')
<<<<<<< HEAD
  {{-- 
=======
>>>>>>> 5affaf5 (fix update)
  <div class="dropdown dropdown-top dropdown-end banner z-0 ">
    <div tabindex="0" role="button" class="btn m-1 h-10 bg-wa">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp"
        viewBox="0 0 16 16">
        <path
          d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
      </svg>
    </div>
    <ul tabindex="0" class="dropdown-content menu bg-green-100 rounded-box z-[1] w-52 p-2 shadow">
      <li class="hover:bg-green-400">
        <a target="__blank" href="https://wa.me/6282232958975"
          class="link link-hover font-mont text-accent text-sm md:text-base">
          Marketing
        </a>
      </li>
      <li class="hover:bg-green-400">
        <a target="__blank" href="https://wa.me/6285174334059"
          class="link link-hover font-mont text-accent text-sm md:text-base">
          Digital Marketing
        </a>
      </li>
    </ul>
  </div>
<<<<<<< HEAD
  --}}
  <!-- Floating Contact Us Icon + Animated Text -->
<div class="fixed bottom-5 right-5 z-50 flex flex-col items-center space-y-2">
  <!-- Contact Us Round Button -->
<button id="contactButton"
    class="bg-green-500 hover:bg-green-600 text-white animate-bounce drop-shadow-md tracking-wide w-24 h-24 rounded-full shadow-xl flex items-center justify-center text-sm font-bold tracking-wide">
    Contact Us
</button>

  <!-- Popup Contact Options -->
  <div id="contactPopup" class="hidden absolute bottom-24 right-0 bg-white border rounded-lg shadow-lg w-60">
    <ul class="py-2 text-gray-700">
      <li>
        <a href="https://wa.me/6282322598975" target="_blank"
          class="block px-4 py-2 hover:bg-green-100">WhatsApp</a>
      </li>
      <li>
        <a href="mailto:hugo@multigunawood.com" target="_blank"
          class="block px-4 py-2 hover:bg-blue-100">Email</a>
      </li>
    </ul>
  </div>
</div>

<!-- Script untuk Toggle Popup -->
<script>
  document.getElementById('contactButton').addEventListener('click', function () {
    const popup = document.getElementById('contactPopup');
    popup.classList.toggle('hidden');
  });

  // Tutup popup jika klik di luar area
  document.addEventListener('click', function (event) {
    const button = document.getElementById('contactButton');
    const popup = document.getElementById('contactPopup');
    if (!button.contains(event.target) && !popup.contains(event.target)) {
      popup.classList.add('hidden');
    }
  });
</script>

<!-- Custom bounce animation -->
<style>
  .animate-bounce {
    animation: bounce 2s infinite ease-in-out;
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(-4px);
    }
    50% {
      transform: translateY(-10px);
    }
  }
</style>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  {{-- toaster initiate --}}
  {{-- toastr --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

=======
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  {{-- toaster initiate --}}
  {{-- toastr --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

>>>>>>> 5affaf5 (fix update)
  @if (Session::has('pesan'))
    toastr. {
    {
    Session::get('alert')
    }
    }("{{ Session::get('pesan') }}");
  @endif
  @stack('page-scripts')
</body>

</html>

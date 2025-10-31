<div class="navbar font-mont bg-neutral-100 shadow-xl sticky top-0 z-50">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-neutral-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a href="/">Home</a></li>
        <li>
          <a>About Us</a>
          <ul class="p-2">
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/pefc-policy">PEFC Policy Statement</a></li>
            <li><a href="/employment-policy">Employment Policy</a></li>
          </ul>
        </li>
        <li><a href="/products">Products</a></li>
        <li><a href="/certificates">Certificates</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/event">Event</a></li>
        <li>
          <a>EUDR<p class="text-green-500 text-xss">NEW</p></a>
          <ul class="p-2">
            <li><a href="/eudr/regulations">EUDR at Kayu Multiguna</a></li>
            {{-- <li><a href="/eudr/products/plywood">EUDR Plywood</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
    <a href="/" class="ml-5">
      <img class="w-auto h-20" src="{{ asset('assets/images/kmgi1.png') }}" />
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a class="text-primary active:text-white text-xl hover:bg-neutral-100" href="/">Home</a></li>
      <li tabindex="0">
        <details>
          <summary class="text-xl hover:bg-neutral-100">About Us
          </summary>
          <ul class="bg-neutral-100">
            <li>
              <a href="/about-us">
                About Us
              </a>
            </li>
            <li>
              <a href="/pefc-policy">
                PEFC Policy Statement
              </a>
            </li>
            <li>
              <a href="/employment-policy">
                Employment Policy
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li tabindex="0">
        <details>
          <summary class="text-xl hover:bg-neutral-100">Certificates</summary>
          <ul class="bg-neutral-100">
            <li>
              <a href="/cert/carb" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                CARB
              </a>
            </li>
            <li>
              <a href="/cert/ce" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                CE
              </a>
            </li>
            <li>
              <a href="/cert/epa" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                EPA
              </a>
            </li>
            <li>
              <a href="/cert/fsc" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                FSC
              </a>
            </li>
            <li>
              <a href="/cert/fsc-coc" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                FSC COC
              </a>
            </li>
            <li>
              <a href="/cert/jas" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                JAS
              </a>
            </li>
            <li>
              <a href="/cert/marine-plywood" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                Marine Plywood
              </a>
            </li>
            <li>
              <a href="/cert/svlk" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                SVLK
              </a>
            </li>
            <li>
              <a href="/cert/pefc" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                PEFC
              </a>
            </li>
            <li>
              <a href="/cert/komo" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                KOMO
              </a>
            </li>
            <li>
              <a href="/cert/sni" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                SNI
              </a>
            </li>
            <li>
              <a href="/cert/iso-9001" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                ISO 9001
              </a>
            </li>
            <li>
              <a href="/cert/ukca" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                UKCA
              </a>
            </li>
            <li>
              <a href="/cert/wood-pellet" class="hover:bg-neutral-100 text-primary text-sm active:text-white">
                Wood Pellet
              </a>
            </li>

          </ul>
        </details>
      </li>
      <li><a class="text-xl text-primary active:text-white hover:bg-neutral-100" href="/gallery">Gallery</a></li>

      <li tabindex="0">
        <details>
          <summary class="text-xl hover:bg-neutral-100">Products</summary>
          <ul class="bg-neutral-100">
            <li>
              <a href="/product/finger-joint-laminated-board">
                Finger Join Laminated Board
              </a>
            </li>
            <li>
              <a href="/product/wood-pellet">
                Wood Pellet
              </a>
            </li>
            <li>
              <a href="/product/komo-certified-product">
                KOMO Certified Product <br> (Finger Joint / Laminated)
              </a>
            </li>
            <li>
              <a href="/product/white-prime">
                White Prime Product
              </a>
            </li>
            <li>
              <a href="/product/plywood">
                FSC Plywood
              </a>
            </li>
            <li>
              <a href="/product/plywood/filmface-ply">
                Film Faced Plywood
              </a>
            </li>
            <li>
              <a href="/product/kaka-door">
                Kaka Door
              </a>
            </li>
            <li>
              <a href="/product/kaka-kusen">
                Kaka Door Frame
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li><a class="text-xl text-primary active:text-white hover:bg-neutral-100" href="/event">Event</a></li>
      <li tabindex="0">
        <details>
          <summary class="text-xl hover:bg-neutral-100">EUDR<p class="text-green-500 text-tiny">NEW</p>
          </summary>
          <ul class="bg-neutral-100">
            <li>
              <a href="/eudr/regulations">
                EUDR at Kayu Multiguna
              </a>
            </li>
            {{-- <li>
              <a href="/eudr/products/plywood">
                EUDR Plywood
              </a>
            </li> --}}
          </ul>
        </details>
      </li>
    </ul>
  </div>
  <div class="navbar-end">
    <a href="/contact-us"
      class="btn btn-lg btn-active bg-black text-white rounded-md font-mont hover:bg-white hover:text-black">Contact
      Us</a>
  </div>
</div>

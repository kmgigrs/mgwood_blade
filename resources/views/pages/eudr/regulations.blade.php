<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'EUDR')
<!-- isi bagian konten -->
@section('content')
  <style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 5px;
      width: 50%;
    }
  </style>
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        EUDR at
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>

<!-- ✅ VIDEO SECTION -->
<div class="w-10/12 md:w-7/12 lg:w-6/12 mx-auto my-5 rounded-lg shadow-lg overflow-hidden" style="max-height:400px;">
    <div class="relative pb-[56.25%] h-0 overflow-hidden rounded-lg">
        <iframe
            id="ytplayer"
            class="absolute top-0 left-0 w-full h-full"
            src="https://www.youtube.com/embed/8hKiKLHMQGg?autoplay=1&mute=1&loop=1&playlist=8hKiKLHMQGg&controls=0&showinfo=0&modestbranding=1&rel=0&playsinline=1&enablejsapi=1"
            frameborder="0"
            allow="autoplay; fullscreen"
            allowfullscreen>
        </iframe>
    </div>
</div>

<!-- 🔊 Button to unmute -->
<div class="text-center mt-3">
    <button id="unmuteBtnYT" class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm flex items-center justify-center mx-auto gap-2">
        Tap to Unmute 
        🔊
    </button>
</div>

<!-- 🎵 YouTube Unmute Script -->
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    let player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('ytplayer', {
            events: {
                'onReady': function() {
                    player.mute();
                    player.playVideo();
                }
            }
        });
    }

    const btn = document.getElementById("unmuteBtnYT");
    btn.addEventListener("click", () => {
        player.unMute();
        player.setVolume(100);
        btn.style.display = "none";
    });
</script>

      <div class="w-10/12">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center">
          <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
            <div class="bg-secondary m-5 container min-h-full">
              <div>
                <div class="flex flex-row gap-2">
                  <div class="basis-1/2">
                    <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-left mb-5">
                      PT Kayu Multiguna Indonesia is a leading company committed to providing
                      high-quality and sustainable wood products. With a focus on innovation and
                      concern for the environment, we offer a wide range of wood products that meet
                      international standards. As a company that cares about the environment, we are
                      fully committed to complying with EUDR (European Union Deforestation Regulation)
                      regulations. Every wood product we offer has gone through a rigorous
                      verification process to ensure that the wood comes from a legal and sustainable
                      source.
                    </p>
                    <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-left">
                      Forest destruction is a serious threat to the environment. That's why we've
                      built a reliable tracking system to guarantee that every tree cut down to
                      produce our products comes from responsibly managed forests. By choosing our
                      products, you not only get high-quality wood products, but also contribute to
                      the preservation of the world's forests.
                    </p>
                  </div>
                  <div class="basis-1/2">
                    <img src="{{ asset('assets/images/eudr/pin.jpg') }}" alt="Lab" class="my-2 center"
                      style="width: 400px; height: 400px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-10/12 lg:w-1/2">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center mb-5">
          <img class="object-cover" src="{{ asset('assets/images/eudr/vian.jpg') }}"
            style="width: 600px; height: 400px" />
        </div>
      </div>
      <div class="w-10/12">
        <p class="font-mont text-accent text-md text-left mb-4">
          PT Kayu Multiguna Indonesia is committed to conducting business responsibly and sustainably. We
          apply best practices in forest management, reduce waste, and improve production efficiency.
        </p>
      </div>
    </div>
  </div>
@endsection

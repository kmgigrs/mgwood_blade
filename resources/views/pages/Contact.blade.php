<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Contact Us')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-secondary mt-5">
    <div class="bg-secondary mt-5 w-full  mx-auto">
      <div class="pt-5 pb-3 w-full md:w-3/4 lg:w-1/2 mx-auto px-4 lg:px-0">
        <h2 class="font-libre text-3xl text-center leading-tight text-primary mb-2">
          <span class="font-extrabold underline decoration-1 underline-offset-4">Contact Us</span>
        </h2>
        <form action="/tellme" method="post" id="contact">
          {{ csrf_field() }}
          <div class="w-full h-full flex items-center justify-center mx-auto max-w-7xl my-2">
            <div class="flex flex-col md:flex-row w-full justify-center">
              <div class="form-control w-full md:w-1/2 mr-0 md:mr-2">
                <label class="label">
                  <span class="label-text font-mont text-primary">First name *
                  </span>
                </label>
                <input id="firstName" name="firstName" type="text" placeholder="First Name"
                  class="input border-2 rounded-xl font-mont input-bordered bg-base-200 w-full" required />
              </div>
              <div class="form-control w-full md:w-1/2 ml-0 md:ml-2">
                <label class="label">
                  <span class="label-text font-mont text-primary">Last name
                  </span>
                </label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                  class="input border-2 rounded-xl font-mont input-bordered bg-base-200 w-full" />
              </div>
            </div>
          </div>
          <div class="w-full h-full flex items-center justify-center mx-auto max-w-7xl my-2">
            <div class="flex flex-col md:flex-row w-full justify-center">
              <div class="form-control w-full md:w-1/2 mr-0 md:mr-2">
                <label class="label">
                  <span class="label-text font-mont text-primary">Email *
                  </span>
                </label>
                <input type="email" id="email" name="email" placeholder="Email"
                  class="input border-2 rounded-xl font-mont input-bordered bg-base-200 w-full" required />
              </div>
              <div class="form-control w-full md:w-1/2 ml-0 md:ml-2">
                <label class="label">
                  <span class="label-text font-mont text-primary">
                    Phone Number
                  </span>
                </label>
                <input type="tel" id="phoneNum" name="phoneNum" placeholder="Phone Number"
                  class="input border-2 rounded-xl font-mont input-bordered bg-base-200 w-full"
                  pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$" />
              </div>
            </div>
          </div>

          <div class="w-full h-full flex items-center justify-center mx-auto max-w-7xl my-2">
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text font-mont text-primary">Message *</span>
              </label>
              <textarea id="message" name="message"
                class="textarea textarea-bordered h-24 border-2 rounded-xl font-mont input-bordered bg-base-200 w-full">
            </textarea>
            </div>
          </div>
          <div class="flex justify-end">
            <button class="btn btn-secondary text-black my-2 font-mont font-semibold bg-primary rounded-md">
              Contact Us
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#contact input').blur(function() {
        if (!$(this).val()) {
          $(this).addClass("error");
        } else {
          $(this).removeClass("error");
        }
      });

      $('#contact textarea').blur(function() {
        if (!$(this).val()) {
          $(this).addClass("error");
        } else {
          $(this).removeClass("error");
        }
      });
    });
  </script>
@endsection

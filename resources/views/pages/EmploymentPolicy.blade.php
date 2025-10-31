<!-- Menghubungkan dengan view template master -->
@extends('welcome')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'About Us - Employment Policy')
<!-- isi bagian konten -->
@section('content')
  <div class="bg-secondary mt-5">
    <div class="w-full h-full flex flex-col items-center justify-center mx-auto max-w-7xl my-5">
      <h2 class="font-libre text-2xl md:text-3xl text-center lg:text-left leading-tight text-primary mb-8 md:mb-4">
        Employment Policy Of
        <span class="font-extrabold block md:inline">
          Kayu Multiguna Indonesia
        </span>
      </h2>
      <div class="w-10/12">
        <div class="w-full lg:w-full h-full flex flex-col items-center justify-center">
          <div class="flex w-full justify-center mx-auto max-w-7xl my-2">
            <div class="bg-secondary m-5 container min-h-full">
              <div>
                <div class="flex flex-row gap-2">
                  <div>
                    <p class="font-mont lg:mx-0 text-md md:text-lg text-primary leading-snug my-2 text-left mb-5">
                      PT. Kayu Multiguna Indonesia in all aspects of its activities hereby stipulates:
                    </p>
                    <ol
                      class="list-decimal font-mont italic font-bold text-primary leading-snug my-2 text-xl">
                      <li>Comply with employment laws and regulations.</li>
                      <li>Comply with the fundamental ILO Conventions relating to employment, namely:</li>
                      <div class="m-2 font-normal text-lg">
                        <ul class="list-disc">
                          <li>Implementing workers' principles and rights in the workplace;</li>
                          <li>Elimination of all forms of forced labor;</li>
                          <li>Prohibition of child labor in the work environment;</li>
                          <li>Elimination of discrimination in employment and occupation;</li>
                          <li>All employees/workers are given the freedom to form trade unions and/or are given the
                            freedom and flexibility to join other legal trade unions;</li>
                          <li>If employees/workers need time to run an organization in the trade union they are a member
                            of, they will be given convenience in applying for a permit to carry out activities;</li>
                          <li>All employees/workers are given the freedom or right to collective bargaining;</li>
                          <li>The age of employees/workers is more than or equal to 18 (eighteen) years which is the
                            minimum age to become an employee/worker.</li>
                        </ul>
                      </div>
                      <li>Free from harassment in the workplace, and supporting gender equality.</li>
                      <li>Committed to anti-corruption.</li>
                      <li>Implementing in a disciplined manner the Occupational Health and Safety (K3) established by
                        Management.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

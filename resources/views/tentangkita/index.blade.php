@extends('layouts.mastertentang')
@section('content')
<section class="mb-20 text-gray-700">
  <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
    <h3 class="text-3xl font-bold mb-6 mt-12 text-gray-800">Kepengurusan  P4S Satria Tani Hanggawana </h3>
    <p class="font-semibold mb-6 pb-2 md:mb-12 md:pb-0 justify-center">
    Kelompok Petani P4S Satria Tani Hanggawana pengalaman di bidang Pangan dan Hortikultura, Perkebunan, Perternakan hingga Perikanan. Kami sudah memiliki lahan pertanian, peternakan, perikanan, dan pemasaran produk dari hasil pertanian dan peternakan, hingga tujuan Agro Wisata petik buah.
    </p>
  </div>

  <div class="container px-5 py-2 mx-auto lg:pt-5 lg:pb-10 lg:pl-96 lg:px-80">
    
    <div class="block rounded-lg shadow-md bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
        <img src="{{ asset('image/pembina.png')}}" />
        </div>
        <div class="p-6">
        <h4 class="text-1xl font-semibold text-center mb-4">M. Afifudin, S.Hut., M.T.,M.Sc</h4>
        <hr />
        <p class="mt-4 font-semibold text-center">
        Pembina P4S Satria Tani Hanggawana
        </p>
        </div>
        
    </div>
    </div>

  <div class="grid md:grid-cols-3 gap-6 text-center">
    <div>
      <div class="block rounded-lg shadow-md bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #9d789b;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/ketua.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Khairur Rizal S.P</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Ketua P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
        <div class="w-24 -mt-12 overflow-hidden  border-spacing-5 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/sekretaris.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Novian Vigis Agung Emenda S.T</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Sekretaris P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/bendahara.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Ahmad Muzakki</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Bendahara P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="grid md:grid-cols-3 gap-9 text-center mt-12">
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #9d789b;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/pendidikan.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Risdiyanto, S.Si., M.Si.</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Divisi Pendidikan & Pelatihan P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
        <div class="w-24 -mt-12 overflow-hidden  border-spacing-5 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/humas.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Mohamad Tarmuji</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Divisi Humas & Pemasaran P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/monitoringg.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Akhmad Otong Turmudi</h4>
          <hr />
          <p class="mt-4 font-semibold">
          Divisi Monitoring & Evaluasi P4S Satria Tani Hanggawana
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
    <h3 class="text-3xl font-bold mb-6 mt-16 text-gray-800 ">Developer SI Hanggawana </h3>
  </div>
  
  <div class="grid md:grid-cols-3 gap-6 text-center mt-12">
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8 ">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #9d789b;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/eko.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Eko Prasetyo</h4>
          <hr />
          <p class="mt-4 font-semibold">
         S1 Teknik Telekomunikasi 2020
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8 ">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
        <div class="w-24 -mt-12 overflow-hidden  border-spacing-5 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/bunga.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Bunga Laelatul Muna</h4>
          <hr />
          <p class="mt-4 font-semibold">
          S1 Teknik Informatika 2021
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg shadow-lg bg-white mr-8 ml-8 ">
        <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
        <div class="w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white">
          <img src="{{ asset('image/hafid.png')}}" />
        </div>
        <div class="p-6">
          <h4 class="text-1xl font-semibold mb-4">Hafid Arief Prasetyo</h4>
          <hr />
          <p class="mt-4 font-semibold">
          S1 Teknik Informatika 2019
          </p>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
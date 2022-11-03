@extends('layouts.masterclass')
@section('content')

<div class="container mx-auto">
<h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-10">Galery Outingclass</h2>
<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/outing1.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/outing2.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/outing3.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="{{ asset('image/outing4.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/outing5.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/outing6.jpeg')}}">
        </div>
      </div>
    </div>
  </div>
  <h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-12 mb-8">360 View Outingclass</h2>

  

</section>
</div>

<div class="container px-5 py-2 mx-auto lg:pt-5 lg:pb-5 lg:px-96">
<div class="flex flex-wrap -m-1 md:-m-2">
<div id="panorama"></div>
</div>
</div>


<div class="container px-5 py-2 mx-auto lg:pt-5 lg:pb-5 lg:px-96">
<div class="flex flex-wrap -m-1 md:-m-2">
<div id="panoramaa"></div>
</div>
</div>

<div class="container px-5 py-2 mx-auto lg:pt-5 lg:pb-5 lg:px-96">
<div class="flex flex-wrap -m-1 md:-m-2">
<div id="panoramaaa"></div>
</div>
</div>


<h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-12 mb-8">Menu Outingclass</h2>
<div class="flex flex-wrap justify-center mt-4">
<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg" src="{{ asset('image/outingclass.png')}}" alt="">
    <div class="p-11">
    <h4 class="text-1xl font-bold uppercase text-center mb-2">Form Pemesanan</h4>
    <form action="outingclass" method="POST">
            @csrf
            <div class="mb-3">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" required="">
    </div> 
    <div class="mb-3">
        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Hp</label>
        <input type="text" id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nohp" required="">
    </div> 
    <div class="mb-3">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
        <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="alamat" required="">
    </div> 
    <div class="mb-3">
    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Paket Yang Ingin Diikuti</label>
    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Paket 10k/ Paket 15k" name="outingclass"></textarea>
    </div>
    <button type="submit" name="submit" class="text-white bg-secondary hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3">Pesan</button>
        </form>
    </div>
</div>
</div>
@endsection
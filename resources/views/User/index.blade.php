@extends('layouts.master')
@section('content')
        @if(session("alert"))
        <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{session("alert")}}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{$err}}</div>
        @endforeach
        @endif

 <!-- Jumbotron -->
<div
  class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover"
  style="background-image: url('{{ asset('image/contoh.png')}}'); height: 400px;">
  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
    <div class="flex justify-center items-center h-full">
      <div class="text-white">
        <h2 class="font-semibold text-4xl mb-4">Pertanian Dan Edukasi Wisata Satria Tani Hanggawana</h2>
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron -->
<!--Akhir Corousel-->
<!--Info-->
    <div class="inline-flex justify-center items-center w-full mt-7">
    <p class="font-extrabold uppercase text-gray-500 dark:text-gray-400 ">Apa Itu Hanggawana?</p>
    </div>
    <div class="inline-flex justify-center items-center w-full">
        <hr class="my-8 w-64 h-1 bg-gray-200 rounded border-0 dark:bg-gray-700">
        <div class="absolute left-1/2 px-4 bg-white -translate-x-1/2 dark:bg-gray-900">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"></path></svg>
        </div>
    </div>
    <div class="inline-flex justify-center items-center w-full">
    <p class="text-gray-500 text-center dark:text-gray-400">Tempat Spesialisasi pertanian edukasi wisata dengan sistem pertanian terpadu</p>
    </div>


    <div class="p-6 max-w-sm mx-auto mt-7 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 ">
    <div class="flex justify-center items-center text-center">
                    <a class="mx-auto text-gray-500 dark:text-gray-400 font font-extrabold">
                    <img src="{{ asset('image/3.png')}}" class="mr-3 ml-8 h-6 sm:h-9" alt="">Edukasi Tani
                    </a>

                    <a class="mx-auto text-gray-500 dark:text-gray-400 font font-extrabold">
                    <img src="{{ asset('image/4.png')}}" class="mr-3 ml-8 h-6 sm:h-9" alt="">Pupuk Magot
                    </a>
                    <a class="mx-auto text-gray-500 dark:text-gray-400 font font-extrabold">
                    <img src="{{ asset('image/5.png')}}" class="mr-3 ml-5 h-6 sm:h-9" alt="">Buah
                    </a>
                </div>
    </div>
<!--Akhir Info-->
<!--Info Katalog-->
    <figure class="mx-auto mt-7 mb-5 max-w-screen-md text-center justify-center items-center lg:w-1/2">
        <blockquote>
            <p class="text-3xl font-bold text-gray-400 dark:text-white">Katalog</p>
        </blockquote>
        <figcaption class="flex justify-center text-center items-center mt-6 space-x-3 ">
            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <cite class="pr-3 font-medium text-center justify-center items-center text-gray-900 dark:text-white">1000+ Buyer</cite>
                <cite class="pl-3 text-sm font-medium text-center justify-center items-center text-gray-500 dark:text-gray-400">Tersedia berbagai jenis buah, sayuran dan benih dengan kualitas terbaik dan fresh. Juga menyediakan pupuk magot yang cocok untuk berbagai tanaman</cite>
            </div>
        </figcaption>
    </figure>
<!--Akhir Info Katalog-->
<!--Katalog -->

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 items-center justify-center mt-9">
    <div class="max-w-sm ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="mx-auto max-w-lg h-auto mt-5" src="{{ asset('image/jambu.jpeg')}}" width="300px" height="400px" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-center text-1xl font-bold tracking-tight text-gray-900 dark:text-white">Jambu Air Madu Deli Hijau</h5>
            
           
        </div>
    </div>
    <div class="max-w-sm ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="mx-auto max-w-lg h-auto mt-5" src="{{ asset('image/Cabai.jpeg')}}" width="300px" height="400px" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-center text-1xl font-bold tracking-tight text-gray-900 dark:text-white">Cabai Besar</h5>
            
        </div>
    </div>
    <div class="max-w-sm ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="mx-auto max-w-lg h-auto mt-5" src="{{ asset('image/Ikan Lele 1.png')}}" width="300px" height="400px" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-center text-1xl font-bold tracking-tight text-gray-900 dark:text-white">Ikan Lele</h5>
            
        </div>
    </div>
    </div>
  
<!--Akhir Katalog-->
@endsection
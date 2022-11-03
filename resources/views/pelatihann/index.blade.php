@extends('layouts.masterpelatihan')
@section('content')

<div class="container mx-auto">
<h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-10">Galery Pelatihan</h2>
<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan1.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan2.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan3.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan4.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan5.jpeg')}}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('image/pelatihan6.jpeg')}}">
        </div>
      </div>
    </div>
  </div>
</section>

<h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-12">Menu Pelatihan</h2>

<div class="grid grid-cols-1 gap-6 lg:grid-cols-3 items-center justify-center mt-7">
@foreach($pelatihans as $pelatihan)
    <div class="max-w-lg ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-sm" src="{{url('')}}/assets/images/{{$pelatihan->image}}" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pelatihan->name}} </h5>
            <a href="{{ route('pelatihann.pemesanan', ['pelatihan'=>$pelatihan->id])}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-secondary rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Pesan
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    @endforeach
</div>
    


@endsection
@extends('layouts.masterkatalog')
@section('content')

<!--Tanaman Pangan-->
<div class="container mx-auto mt-7">
    <blockquote class="text-2xl font-bold text-center text-gray-900 dark:text-white">
        <p>Cari dengan mudah</p>
    </blockquote>
        <p class="text-center text-base">Cukup dengan satu langkah, temukan produk yang kalian inginkan</p>
    <div class="flex space-x-2 justify-center mt-8">
        <div>
        <a href="{{ route('katalog.index')}}"> <button type="button" class="inline-block px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded hover:bg-yellow-400 hover:shadow-lg focus:outline-none focus:ring-0 active:bg-primary">Buah-Buahan</button></a>
        <a href="{{ route('katalog.index1')}}"><button  type="button" class="inline-block px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded hover:bg-yellow-400 hover:shadow-lg focus:outline-none focus:ring-0 active:bg-primary">Sayuran</button></a>
        <a href="{{ route('katalog.index2')}}"><button  type="button" class="inline-block px-6 py-2.5 bg-primary text-slate-800 font-medium text-xs leading-tight uppercase rounded hover:bg-yellow-400 hover:shadow-lg focus:outline-none focus:ring-0 active:bg-primary">Tanaman Pangan</button></a>
        </div>
    </div>
    
    <form class="flex items-center justify-center mt-10" method="get" action="{{url('/search/katalogtanamanpangan')}}">  
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-72">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="search_name" placeholder="Search" required="">
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-secondary rounded-lg border border-secondary hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
</form>
</div>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-3 items-center justify-center mt-9 mb-5">
    @foreach($tanamen as $tanaman)
    <div class="max-w-sm ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="mx-auto max-w-lg h-auto mt-5" width="300px" height="400px" src="{{url('')}}/assets/images/{{$tanaman->image}}" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-center text-1xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $tanaman->name}}</h5>
            <h5 class="text-1xl font-semibold"> {{ $tanaman->description}}</h5>
            <p class="mb-3 mt-4 font-semibold text-gray-700 dark:text-gray-400">Stok {{ $tanaman->stok}}</p>
            <a href="{{ route('tanaman.pemesanan', ['tanaman'=>$tanaman->id])}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-secondary rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Pesan
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div> 
    </div>
    @endforeach
    </div>
@endsection
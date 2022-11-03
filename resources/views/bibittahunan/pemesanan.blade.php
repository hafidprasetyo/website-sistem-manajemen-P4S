@extends('layouts.masterkatalog')
@section('content')

<div class="flex flex-wrap justify-center mt-4">
<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <img class="mx-auto max-w-lg h-auto mt-5" src="{{url('')}}/assets/images/{{$bibittahunan->image}}" width="300px" height="400px" alt="">
    <div class="p-11">
    <h4 class="text-1xl font-bold uppercase text-center mb-2">{{ $bibittahunan->name}}</h4>
    <form action="bibittahunan" method="POST">
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
                <textarea id="alamat" rows="4" class="block p-2.5 w-72 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Bibit Tahunan Yang Dibeli</label>
                <input type="text" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="namabibittahunan" required="">
            </div> 
            <div class="mb-3">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah Bibit Tahunan Yang Dibeli</label>
                <input type="text" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="jumlahbibittahunan" required="">
            </div> 
            
            <button type="submit" name="submit" class="text-white bg-secondary hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3">Pesan</button>
        </form>
    </div>
</div>
</div>

@endsection
@extends('layouts.mastersayuran')
@section('content')

<div class="flex flex-wrap justify-center mt-4">
    <div class="p-4 w-full max-w-sm mb-3 bg-white rounded-md border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h4 class="text-1xl font-bold uppercase text-center mb-2">Edit Data Sayuran</h4>
        <form action="{{ route('sayuran.update', ['sayuran'=>$sayuran->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @if($errors->any())
                <div class="text-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Sayuran</label>
                <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-3">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Sayuran</label>
                <input type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" >
                @error('description') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok Sayuran</label>
                <input type="text" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}">
                @error('stok') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-3">        
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Foto Sayuran</label>
            <input class="block w-72 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 form-control-file" id="file_input" type="file" name="image"> 
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <button type="submit" name="submit" class="text-white bg-primary hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3">Edit</button>
        </form>
</div>
</div>

@endsection
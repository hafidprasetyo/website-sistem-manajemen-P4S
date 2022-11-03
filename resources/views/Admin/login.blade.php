@extends('layouts.masteradmin')
@section('content')

<div class="md:container md:mx-auto">
        @if(session("alert"))
        <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{session("alert")}}</div>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{$err}}</div>
        @endforeach
        @endif
  <section class="container mx-auto">
    <div class="block bg-white shadow-lg rounded-lg mt-10">
    <div class="flex flex-wrap justify-center mt-4 bg">
        <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf
        <img class="mx-auto w-48 mt-10" src="{{ asset('image/Logoo.png')}}" alt="logo"/>
        <h1 class="text-1xl text-center mb-5 mt-5">Silahkan Isi Data Admin Untuk Login</h1>
        <div class="mb-6">
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
            <input class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="username">
        </div> 
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="password" class=" form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password">
        </div> 
        <button type="submit" class="text-white bg-secondary hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-blue-800 mb-10">Login</button>
    </form>
    </div>
    </div>
</section>
</div>
@endsection
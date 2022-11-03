@extends('layouts.masterdashboardtambahadmin')
@section('content') 
    <div class="flex flex-wrap justify-center mt-10">
        <div class="p-4 w-full max-w-sm mb-3 bg-white rounded-md border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h4 class="text-1xl font-bold uppercase text-center mb-2"></h4>
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        <form action="{{ route('Admin.destroy',['Admin'=>$Admin->id]) }}" method="POST" class="font-semibold"> Data Akun Admin || @method('DELETE') @csrf <button type="submit" class="focus:outline-none text-white bg-primary hover:bg-yellow-400 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button></form>
                </caption>
                    <hr>
                    @if(session()->has('alert'))
                    <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{session("alert")}}</div>
                    @endif
                    <ul>
                        <li>Nama :
                            {{$Admin->username}}
                        </li>
                        <li>Password :
                            {{$Admin->password}}
                        </li>
                    </ul>
        </div>
    </div>
@endsection
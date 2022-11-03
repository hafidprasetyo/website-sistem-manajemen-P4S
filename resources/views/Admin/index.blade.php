@extends('layouts.masterdashboardtambahadmin')
@section('content')

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm rounded-lg text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        <form action="{{ route('admin.create')}}" method="get">
        @csrf
            Data Admin P4S Hanggawana ||<button type="submit" class="ml-3 focus:outline-none text-white bg-primary hover:bg-yellow-400 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"> Tambah Admin</button></form>
        </caption>
        @if(session()->has("alert"))
        <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mb-3" role="alert">{{session("alert")}}</div>
        @endif
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="text-uppercase text-center py-3 px-6">
                   No
                </th>
                <th scope="col" class="text-uppercase text-center py-3 px-6">
                    Username
                </th>
                <th scope="col" class="text-uppercase text-center py-3 px-6">
                    Password
                </th>
                <th scope="col" class="text-uppercase text-center py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @forelse ($admins as $admin)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 py-3 px-6">{{$loop->iteration}}</th>
                      <td class="text-center text-xxs font-weight-bolder opacity-7 py-3 px-6">{{$admin->username}}</td>
                      <td class="text-center text-xxs font-weight-bolder opacity- py-3 px-67">{{$admin->password}}</td>
                      <td class="text-center text-xxs font-weight-bolder opacity- py-3 px-67"><form action="{{ route('admin.destroy',['admin'=>$admin->id]) }}" method="POST" class="font-semibold">
                      @method('DELETE') @csrf 
                      <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button></form></td>
                      
                  </tr>
                  @empty
                  <td colspan="6" class="text-center">Tidak ada data...</td>
                  @endforelse
        </tbody>
    </table>
</div>


@endsection
@extends('layouts.masterkonsultan')
@section('content')


    <h2 class="text-2xl font-extrabold uppercase text-center text-gray-500 mt-7">Menu Jasa Konsultan</h2>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 items-center justify-center mt-7">
    @foreach($konsultans as $konsultan)
    <div class="max-w-lg ml-6 mr-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-sm" src="{{url('')}}/assets/images/{{$konsultan->image}}" alt="">
        <div class="p-5">
                <h5 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $konsultan->name}} </h5>
            <a href="{{ route('konsultann.pemesanan', ['konsultan'=>$konsultan->id])}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-secondary rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Pesan
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection
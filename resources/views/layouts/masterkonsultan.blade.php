<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>P4S HANGGAWANA</title>
  <link rel="icon" href="{{ asset('image/Logo1.png')}}"/>
  @vite('resources/css/app.css')
</head>
<body>
<!--Navbar-->
 <nav class="bg-primary border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="{{ asset('image/Logo1.png')}}" class="mr-3 h-6 sm:h-9" alt=""/>
        <span class="self-center text-white text-xl font-semibold whitespace-nowrap dark:text-white">SI Hanggawana</span>
    </a>
  <div class="flex md:order-2">
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-primary focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
       </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col p-4 mt-4 bg-primary rounded-lg border border-primary md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-primary dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{ route('user.index')}}" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
      </li>
      <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Katalog<svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="{{ route('katalog.index')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hasil Pertanian</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="{{ route('katalog1.index')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Hasil Peternakan dan Perikanan</a>
                </div>
            </div>
            </li>
      <li>
        <a href="{{ route('konsultann.index')}}" class="block py-2 pr-4 pl-3 text-slate bg-blue-500 rounded md:bg-transparent md:text-slate md:p-0 dark:text-slate-900">Konsultan</a>
      </li>
      <li>
        <a href="{{ route('pelatihann.index')}}" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pelatihan</a>
      </li>
      <li>
        <a href="{{ route('outing.index')}}" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Outingclass</a>
      </li>
      <li>
        <a href="{{ route('tentang.index')}}" class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-900 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang Kita</a>
      </li>
    </ul>
    </div>
    </div>
    </nav>

    @yield('content')

    <div class="mt-5 py-10 px-7 bg-gray-100 dark:bg-slate-700 md:flex md:items-center md:justify-center">
            <span class="text-sm font-semibold justify-center text-slate-700 dark:text-slate-700 sm:text-center"></span>
        </div>

    <!--Footer-->
    <footer class="bg-white dark:bg-gray-900 ">
        <div class="py-6 px-4 bg-primary dark:bg-slate-700 md:flex md:items-center md:justify-center">
            <span class="text-sm font-semibold justify-center text-slate-700 dark:text-slate-700 sm:text-center">© 2022. All Rights Reserved.</span>
        </div>
    </footer>
<!--Akhir Footer-->





  @vite('resources/js/app.js')
</body>
</html>
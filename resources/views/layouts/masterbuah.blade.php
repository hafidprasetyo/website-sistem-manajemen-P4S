<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>P4S HANGGAWANA</title>
  <link rel="icon" href="{{ asset('image/Logo1.png')}}"/>
  @vite('resources/css/app.css')
</head>
<body class="text-blueGray-700 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
                <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                    <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg></button>
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('image/Logo1.png')}}" class="mr-3 h-6 sm:h-9" alt=""/>
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">SI Hanggawana</span>
                    </a>
                    <ul class="md:hidden items-center flex flex-wrap list-none">
                        <li class="inline-block relative">
                        <form action="{{ route('login.logout') }}" method="post">
                            @csrf
                                <div class="items-center flex">
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"> Logout</button></div >
                        </form>
                        </li>
                    </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-200">
                     <div class="flex flex-wrap">
                        <div class="w-6/12">
                        <a href="#" class="flex items-center">
                        <img src="{{ asset('image/Logo1.png')}}" class="mr-3 h-6 sm:h-9" alt=""/>
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">SI Hanggawana</span>
                    </a>
                        </div>
                        <div class="w-6/12 flex justify-end">
                            <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
                        </div>
                    </div>
                </div>
                     <!-- Divider -->
    <hr class="my-2 md:min-w-full" />
<!--Halaman Admin-->    
    <!-- Heading -->
    <h5 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Halaman Admin
    </h5>
    <!-- Navigation -->
    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
        <li class="items-center">
            <a href="{{route('adminlte.index')}}" class="text-xs uppercase py-3 font-bold flex text-blueGray-700 hover:text-blueGray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> Dashboard
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('Admin.index') }}" class="text-xs uppercase py-3 font-bold flex text-blueGray-700 hover:text-blueGray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg> Tambah Admin
            </a>
        </li>
    </ul>
    <!-- Divider -->
<hr class="my-4 md:min-w-full" />
    <!-- Heading -->
    <h5 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
       Data Si Hanggawana
    </h5>
    <ul>
        <li class="items-center">
            <a href="{{ route('konsultan.index') }}" class="flex text-xs uppercase py-3 font-bold  text-blueGray-700 hover:text-blueGray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg> Data Konsultan
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('pelatihan.index') }}" class="flex text-xs uppercase py-3 font-bold  text-blueGray-700 hover:text-blueGray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg> Data Pelatihan
            </a>
        </li>
    </ul>
<!--Akhir Halaman Admin-->
<!--Data Katalog Hasil Pertanian-->
    <!-- Divider -->
    <hr class="my-4 md:min-w-full" />
    <!-- Heading -->
    <h5 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Data Katalog Hasil Pertanian
    </h5>
    <!-- Navigation -->
    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
        <li class="items-center">
            <a href="{{ route('buah.index') }}" class="text-xs uppercase py-3 font-bold flex text-blue-500 hover:text-blue-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Buah-Buahan
            </a>
        </li>

        <li class="items-center">
            <a href="{{ route('sayuran.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Sayuran
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('tanaman.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Tanaman Pangan
            </a>
        </li>
    </ul>
<!--Akhir Data Katalog Hasil Pertanian-->
<!--Data Katalog Hasil Peternakan dan Perikanan-->
    <!-- Divider -->
    <hr class="my-4 md:min-w-full" />
    <!-- Heading -->
    <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Data Katalog Hasil Peternakan dan Perikanan
    </h6>
    <!-- Navigation -->
    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
        <li class="items-center">
            <a href="{{ route('peternakan.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Peternakan
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('perikanan.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Perikanan
            </a>
        </li>
        
        <li class="items-center">
            <a href="{{ route('benih.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Benih
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('bibitmusiman.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Bibit Musiman
            </a>
        </li>
        <li class="items-center">
            <a href="{{ route('bibittahunan.index') }}" class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold flex">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg> Bibit Tahunan
            </a>
        </li>
    </ul>
<!--Akhir Data Katalog Hasil Peternakan dan Perikanan-->
<!--Data Kalkulasi Pupuk-->
                <!-- Divider -->
                <hr class="my-4 md:min-w-full" />
                <!-- Heading -->
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Data Kalkulasi Pupuk
                </h6>
                <!-- Navigation -->
                <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                    <li class="inline-flex">
                        <a href="{{ route('pupuk.index') }}"  class="text-blueGray-700 hover:text-blueGray-500 text-sm flex mb-4 no-underline font-semibold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg> Dashboard Pupuk
                        </a>
                    </li>
                </ul>
                </div>
                </div>
        </nav>
<!--Akhir Data Kalkulasi Pupuk-->
    <div class="relative md:ml-64 bg-tree">
                <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                        <a class="text-gray-900 text-sm uppercase hidden lg:inline-block font-semibold">Katalog Buah</a >
                        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <form action="{{ route('login.logout') }}" method="post">
                            @csrf
                                <div class="items-center flex">
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"> Logout</button></div >
                        </form>
                        </ul>
                    </div>
                </nav> 
                
                <div class="relative md:pt-32 pb-32 pt-12">
                    <div class="px-4 md:px-10 mx-auto w-full">
                        <div>

                        @yield('content')

                        </div>
                    </div>
                </div>
                <footer class="block mt-64 bg-four">
                    <div class="container mx-auto px-4">
                        <hr class="mb-4 border-b-1 border-blueGray-200"/>
                        <div class="flex flex-wrap items-center md:justify-between justify-center">
                            <div class="w-full md:w-4/12 px-4">
                                <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                                    Copyright ©
                                    <span id="get-current-year"></span>
                                    <a
                                        >
                                        P4S Hanggawana
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

        (function() {
            /* Chart initialisations */
            /* Line Chart */
            var config = {
                type: "line",
                data: {
                    labels: [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July"
                    ],
                    datasets: [{
                        label: new Date().getFullYear(),
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [65, 78, 66, 44, 56, 67, 75],
                        fill: false
                    }, {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#fff",
                        borderColor: "#fff",
                        data: [40, 68, 86, 74, 56, 60, 87]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Sales Charts",
                        fontColor: "white"
                    },
                    legend: {
                        labels: {
                            fontColor: "white"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                fontColor: "rgba(255,255,255,.7)"
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Month",
                                fontColor: "white"
                            },
                            gridLines: {
                                display: false,
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(0, 0, 0, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(255,255,255,.7)"
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Value",
                                fontColor: "white"
                            },
                            gridLines: {
                                borderDash: [3],
                                borderDashOffset: [3],
                                drawBorder: false,
                                color: "rgba(255, 255, 255, 0.15)",
                                zeroLineColor: "rgba(33, 37, 41, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }]
                    }
                }
            };
            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);

            /* Bar Chart */
            config = {
                type: "bar",
                data: {
                    labels: [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July"
                    ],
                    datasets: [{
                        label: new Date().getFullYear(),
                        backgroundColor: "#ed64a6",
                        borderColor: "#ed64a6",
                        data: [30, 78, 56, 34, 100, 45, 13],
                        fill: false,
                        barThickness: 8
                    }, {
                        label: new Date().getFullYear() - 1,
                        fill: false,
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
                        data: [27, 68, 86, 74, 10, 4, 87],
                        barThickness: 8
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Orders Chart"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    legend: {
                        labels: {
                            fontColor: "rgba(0,0,0,.4)"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            scaleLabel: {
                                display: true,
                                labelString: "Month"
                            },
                            gridLines: {
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Value"
                            },
                            gridLines: {
                                borderDash: [2],
                                drawBorder: false,
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.2)",
                                zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }]
                    }
                }
            };
            ctx = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(ctx, config);
        })();
    </script>
    

@vite('resources/js/app.js')
</body>
</html>
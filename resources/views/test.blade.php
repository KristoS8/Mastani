<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAstani</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    {{-- navbar --}}

    <nav class="bg-hijau-primary border-gray-200 dark:bg-gray-900 text-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MASTANI</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                {{-- <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button> --}}
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                {{-- login --}}
                <div class="p-2 gap-x-3 grid grid-cols-2 sm:gap-x-8">
                    <a href="/login"
                        class="p-2 border-2 rounded-md hover:bg-white hover:text-hijau-primary active:bg-gray-100 focus:ring-gray-200 focus:ring-2 sm:text-sm text-xs">Masuk</a>
                    <a href="/regist"
                        class="p-2 border-2 rounded-md hover:bg-white hover:text-hijau-primary active:bg-gray-100 focus:ring-gray-200 focus:ring-2 sm:text-sm text-xs">Daftar</a>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 p-3 my-1"
                id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 gap-x-6">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 md:dark:text-blue-500 underline underline-offset-4 md:hover:text-gray-200"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Keuangan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pemasaran</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Literasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}
    {{-- cuaca --}}
    <div class="border-2 w-10/12 mx-auto border-gray-300 my-8 rounded-lg">
        <div class="flex justify-between w-11/12 mx-auto">
            <div class="w-max h-max flex justify-center items-center">
                <h1 class="font-semibold text-hijau-primary mt-4 text-xl" id="weather_prov">Jawa Tengah, </h1>
                <h1 class="font-semibold text-hijau-primary ml-1 mt-4 text-xl" id="weather_kab">Kabupaten Magelang
                </h1>
            </div>

            <div class="font-semibold text-hijau-primary ml-1 mt-4 text-xl" id="weather_date">Senin, 14 Agustus 2024
            </div>

        </div>

        <div class="flex items-center my-5 w-11/12 mx-auto justify-between">
            <div class="flex items-center gap-5 w-max">
                <img src="{{ asset('img/weather.png') }}" alt="" class="w-12">
                <div class="text-gray-900 text-3xl w-max top-10" id="weather_temp">30°C</div>


                <div class="w-max text-xs text-gray-600">
                    <div class="flex items-center gap-1">
                        <div>Arah Angin:</div>
                        <div id="weather_wind_degree">199°</div>
                    </div>
                    <div class="flex items-center gap-1">
                        <div>Kecepatan Angin:</div>
                        <div id="weather_wind_speed">5 Km/h</div>
                    </div>
                    <div class="flex items-center gap-1">
                        <div>Kelembapan:</div>
                        <div id="weather_humidity">49%</div>
                    </div>
                </div>
            </div>

            <div class="text-gray-800 font-semibold" id="weather_name">Sebagian Berawan</div>

        </div>


    </div>

    {{-- fitur --}}
    <div class="grid justify-items-center my-20">
        <div class="grid grid-cols-1 justify-items-center w-8/12 sm:grid-cols-3 gap-8 sm:gap-0">
            <div
                class="outline-none w-max p-16 flex justify-center items-center rounded-xl shadow-lg border border-gray-400">
                <a class="" href="">
                    <img src="{{ asset('img/keuangan.svg') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">Keuangan</div>
                    </div>
                </a>
            </div>
            <div
                class="outline-none w-max p-16 flex justify-center items-center rounded-xl shadow-lg border border-gray-400">
                <a class="" href="">
                    <img src="{{ asset('img/pemasaran.svg') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">Pemasaran</div>
                    </div>
                </a>
            </div>
            <div
                class="outline-none w-max p-20 flex justify-center items-center rounded-xl shadow-lg border border-gray-400">
                <a class="" href="">
                    <img src="{{ asset('img/literasi.svg') }}" alt="" class="mx-auto text-center">

                    <div class="w-full grid justify-items-center my-2">
                        <div class="font-semibold mt-1">Literasi</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                        <h2
                            class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                            Menjual Produk, Mengelola Keuangan, dan Mendapatkan Pengetahuan Yang Tepat</h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            Mastani datang menyediakan fitur-fitur yang dirancang khusus untuk memenuhi kebutuhan
                            petani, mulai dari kemudahan berjualan secara online, hingga dompet digital yang
                            memungkinkan petani menabung dan mengelola keuangan dengan lebih efisien. Selain itu,
                            kami juga menawarkan berbagai sumber daya dan literasi tentang pertanian, sehingga
                            petani dapat meningkatkan pengetahuan dan keterampilan mereka.</p>
                    </div>
                    <button
                        class="sm:w-fit w-full px-3.5 py-2 bg-hijau-primary hover:bg-green-700 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                        <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                    </button>
                </div>
                <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover my-5 sm:my-0"
                    src="{{ asset('img/about.png') }}" alt="about Us image" />
            </div>
        </div>
    </section>

    {{-- Tabungan --}}

    <div class="sm:w-full my-16">
        <section class="h-max sm:mx-auto mx-5 sm:flex sm:justify-between sm:w-10/12 w-max">
            <div
                class="sm:w-[576px] w-[355px] p-6 bg-white border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-5">
                <a href="#">
                    <h5 class="mb-2 sm:text-2xl text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Tabungan</h5>
                </a>
                <div class="flex justify-between items-center mt-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">Total Saldo</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">12.753.000</p>
                </div>
                <div class="flex justify-between items-center mb-3">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">Rekening Bank</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">BSI :
                        33102911291219</p>
                </div>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau-primary rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-white dark:hover:bg-gray-100 dark:focus:ring-gray-500">
                    Top Up
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div
                class="sm:w-[576px] p-6 w-[355px] bg-white border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 sm:text-2xl text-xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan
                        Keuangan
                    </h5>
                </a>
                <div class="flex justify-between items-center mt-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">Penjualan</p>
                    <p class="mb-3 text-gray-700 dark:text-gray-400 font-semibold sm:text-base text-xs">3.104.000</p>
                </div>
                <div class="flex justify-between items-center my-1">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">Beban-beban</p>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 sm:text-base text-xs">1.250.000</p>
                </div>
                <div class="flex justify-between items-center mb-3">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 sm:text-base text-xs">Keuntungan</p>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 sm:text-base text-xs">1.853.000</p>
                </div>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau-primary rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-white dark:hover:bg-gray-100 dark:focus:ring-gray-500">
                    Selengkapnya
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </section>
    </div>



    {{-- footer --}}
    <footer class="bg-white dark:bg-gray-900 ">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Instagram</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a
                        href="/">Mastani</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>

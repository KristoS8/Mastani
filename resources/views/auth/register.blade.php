<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex min-h-full justify-center px-6 py-20 lg:px-8 bg-green-50">
        <div class="border border-gray-300 py-20 px-8 sm:px-32 rounded-xl shadow-lg bg-gray-50">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-52 w-auto" src="{{ asset('img/logo_mastani.svg') }}" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Daftar
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama</label>
                        <div class="mt-2">
                            <input id="nama" name="nama" type="text" autocomplete="nama" required
                                placeholder="nama"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 px-3">
                        </div>
                    </div>

                    <div>
                        <label for="no_telp" class="block text-sm/6 font-medium text-gray-900">No. Telp</label>
                        <div class="mt-2">
                            <input id="no_telp" name="no_telp" type="tel" autocomplete="no_telp" required
                                placeholder="+62"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 px-3">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                placeholder="name@gmail.com"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 px-3">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 px-3">
                        </div>
                    </div>

                    <div>
                        <label for="alamat" class="block text-sm/6 font-medium text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <input id="alamat" name="alamat" type="text" autocomplete="alamat" required
                                placeholder="Alamat"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 px-3">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-hijau-primary px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Register</button>
                    </div>
                </form>

                <div class="flex items-center justify-evenly my-10 gap-5">
                    <button type="button"
                        class="px-5 py-3 inline-flex items-center rounded-lg text-white text-base tracking-wider font-semibold border-none outline-none bg-blue-700 hover:bg-blue-800 active:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" fill="#fff" class="inline mr-3"
                            viewBox="0 0 167.657 167.657">
                            <path
                                d="M83.829.349C37.532.349 0 37.881 0 84.178c0 41.523 30.222 75.911 69.848 82.57v-65.081H49.626v-23.42h20.222V60.978c0-20.037 12.238-30.956 30.115-30.956 8.562 0 15.92.638 18.056.919v20.944l-12.399.006c-9.72 0-11.594 4.618-11.594 11.397v14.947h23.193l-3.025 23.42H94.026v65.653c41.476-5.048 73.631-40.312 73.631-83.154 0-46.273-37.532-83.805-83.828-83.805z"
                                data-original="#010002" />
                        </svg>
                        Facebook
                    </button>

                    <button type="button"
                        class="px-5 py-3 inline-flex items-center rounded-lg text-[#333] text-base tracking-wider font-semibold border-none outline-none shadow-lg bg-gray-50 hover:bg-gray-100 active:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" fill="#fff" class="inline mr-3"
                            viewBox="0 0 512 512">
                            <path fill="#fbbd00"
                                d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                                data-original="#fbbd00" />
                            <path fill="#0f9d58"
                                d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                                data-original="#0f9d58" />
                            <path fill="#31aa52"
                                d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                                data-original="#31aa52" />
                            <path fill="#3c79e6"
                                d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                                data-original="#3c79e6" />
                            <path fill="#cf2d48"
                                d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                data-original="#cf2d48" />
                            <path fill="#eb4132"
                                d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                                data-original="#eb4132" />
                        </svg>
                        Google
                    </button>
                </div>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Sudah memiliki akun?
                    <a href="/login" class="font-semibold text-hijau-primary hover:text-green-700">Masuk disini</a>
                </p>
            </div>

            <div class="flex justify-center mt-5">
                <a href="/"
                    class="sm:w-fit w-full px-3.5 py-2 bg-hijau-primary hover:bg-green-700 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6">Home</span>
                </a>
            </div>

        </div>
    </div>

</body>

</html>

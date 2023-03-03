<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body>
    <header class="w-full px-8 text-gray-700 bg-white">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <div class="relative flex flex-col md:flex-row">
                <a href="#_"
                    class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                    <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">
                        Pengaduan
                        <span class="text-indigo-600">Masyarakat</span>
                    </span>
                </a>
                <nav
                    class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Pengaduan</a>
                </nav>
            </div>

            <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                <a href="#"
                    class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                    Register
                </a>
                <span class="inline-flex rounded-md shadow-sm">
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap
                                transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500
                                focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                        Login
                    </a>
                </span>
            </div>
        </div>
    </header>
    <!-- End header -->

    <div class="py-20 bg-white">
        <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
                Pengaduan Masyarakat
            </h2>
            <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Aplikasi Pengaduan Masyarakat Layanan aspirasi dan Pengaduan masyarakat Online.
                Laporkan keluhan atau aspirasi Anda. Laporan Anda akan terus ditindaklanjuti hingga terselesaikan
            </p>
            <div class="flex justify-center mt-8">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border
                                border-transparent rounded-md hover:bg-indigo-700">
                        Laporkan Pengaduan
                    </a>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>
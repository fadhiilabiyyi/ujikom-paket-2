@extends('layouts.admin')

@section('main')
<main class="">
    <div class="w-full mt-10 flex flex-col">
        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-start text-xl">Registrasi Petugas</p>
            <form class="flex flex-col pt-3 md:pt-8" action="{{ route('petugas.petugas.store') }}" method="POST">
                @csrf
                <div class="flex flex-col pt-4">
                    <label for="nama_petugas" class="text-base">Nama Petugas</label>
                    <input type="text" id="nama_petugas" name="nama_petugas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                
                <div class="flex flex-col pt-4">
                    <label for="username" class="text-base">Username</label>
                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-base">Password</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col pt-4">
                    <label for="telp" class="text-base">Telp</label>
                    <input type="number" id="telp" name="telp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            
                <button type="submit" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 my-8">Registrasi</button>
            
            </form>
        </div>
    </div>
</main>
@endsection
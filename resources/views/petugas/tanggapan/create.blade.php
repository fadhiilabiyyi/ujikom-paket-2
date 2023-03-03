@extends('layouts.admin')

@section('main')
<main class="">
    <div class="w-full mt-10 flex flex-col">
        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-start text-xl">Form Tanggapan</p>
            <form class="flex flex-col pt-3 md:pt-8" action="{{ route('petugas.tanggapan.store', $pengaduan->id_pengaduan) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                <input type="hidden" name="id_petugas" value="{{ Auth::guard('petugas')->user()->id_petugas }}">
                <div class="flex flex-col pt-4">
                    <label for="tanggal_tanggapan" class="text-base">Tanggal Tanggapan</label>
                    <input type="date" id="tanggal_tanggapan" name="tanggal_tanggapan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                
                <div class="flex flex-col pt-4">
                    <label for="tanggapan" class="text-base">Tanggapan</label>
                    <input id="tanggapan" type="hidden" name="tanggapan">
                    <trix-editor id="tanggapan" input="tanggapan"></trix-editor>    
                </div>
            
                <button type="submit" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 my-8">Kirim Tanggapan</button>
            
            </form>
        </div>
    </div>
</main>
@endsection
@extends('layouts.admin')

@section('main')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Pengaduan</h2>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Pengaduan dilaporkan oleh {{ $pengaduan->masyarakat->nama }} pada tanggal {{ $pengaduan->tanggal_pengaduan }}</h4>
            <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="" class="w-50 mb-3">
            <article>
                {!! $pengaduan->isi_laporan !!}
            </article>
        </div>
    </div>
</main>

@endsection
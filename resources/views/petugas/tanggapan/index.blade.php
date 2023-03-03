@extends('layouts.admin')

@section('main')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Tanggapan</h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Tanggal Tanggapan</th>
                            <th class="px-4 py-3">Nama Pelapor</th>
                            <th class="px-4 py-3">Nama Petugas</th>
                            <th class="px-4 py-3">Detail Pengaduan</th>
                            <th class="px-4 py-3">Status Pengaduan</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($data as $tanggapan)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $tanggapan->tanggal_tanggapan }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $tanggapan->pengaduan->masyarakat->nama }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $tanggapan->petugas->nama_petugas }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('petugas.pengaduan.show', $tanggapan->pengaduan->id_pengaduan) }}">Detail Pengaduan</a>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                @switch($tanggapan->pengaduan->status)
                                    @case("0")
                                        <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">Belum Di-verifikasi</span>
                                        @break
                                    @case("proses")
                                        <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">Proses</span>
                                        @break
                                    @case("selesai")
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Sudah Ditanggapi</span>
                                        @break
                                    @default    
                                @endswitch
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>    
        </div>    
    </div>
</main>
@endsection
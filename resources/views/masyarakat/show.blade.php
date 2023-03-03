<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pengaduan Saya</title>
</head>
<body>
    <h1>Detail Pengaduan Saya</h1>

    <h4>Dilaporkan pada tanggal {{ $pengaduan->tanggal_pengaduan }}</h4>
    <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="" width="50%">
    <article>
        {!! $pengaduan->isi_laporan !!}
    </article>
</body>
</html>
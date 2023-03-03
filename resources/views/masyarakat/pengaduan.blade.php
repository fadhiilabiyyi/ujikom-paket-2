<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data pengaduan saya</title>
</head>
<body>
    <h1>Data pengaduan saya</h1>
    <table>
        <tr>
            <th>ID Pengaduan</th>
            <th>Status Pengaduan</th>
            <th>Status</th>
        </tr>
        @foreach ($data as $pengaduan)
        <tr>
            <td>{{ $pengaduan->id_pengaduan }}</td>
            <td>{{ $pengaduan->status }}</td>
            <td><a href="{{ route('masyarakat.pengaduan.detail', $pengaduan->id_pengaduan) }}">Detail</a> | Sunting</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
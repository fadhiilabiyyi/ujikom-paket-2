<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pengaduan</title>
    @vite('resources/css/app.css')

    <!-- Tailwind -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full mt-10 flex flex-col">

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Form Pengaduan Masyarakat</p>
                <form class="flex flex-col pt-3 md:pt-8" action="{{ route('pengaduan.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="tanggal_pengaduan" class="text-lg">Tanggal Pengaduan</label>
                        <input type="date" id="tanggal_pengaduan" name="tanggal_pengaduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="isi_laporan" class="text-lg">Isi Laporan</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" name="isi_laporan" id="isi_laporan" cols="30" rows="10"></textarea>
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="foto" class="text-lg">Foto</label>
                        <img src="" alt="" class="img-preview w-60 mb-3">
                        <input type="file" id="foto" name="foto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline img-preview" onchange="previewImage()">
                    </div>
                    <button type="submit" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 my-8">Kirim Laporan</button>
                </form>
            </div>

        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview')
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data Karyawan</title>
</head>
<body class="m-5">
    <!-- buat menu -->
    <nav class="text-center mb-5">
        <button id="btn_tambah" class="bg-red-300 w-36 h-10 rounded-full border-2 border-black" onclick="gotoAdd()" >Tambah</button>
        <button id="btn_refresh" class="bg-slate-300 w-36 h-10 rounded-full border-2 border-black">Refresh</button>
    </nav>

    <!-- buat table -->
     <table class="w-full">
        <!-- buat judul -->
        <thead>
            <tr class="bg-orange-600 h-5">
                <th class="border-2 border-rose-500 w-1/12">Aksi</th>
                <th class="border-2 border-rose-500 w-1/12">NIK</th>
                <th class="bg-sky-400 border-2 border-rose-500 w-3/12">Nama Karyawan</th>
                <th class="border-2 border-rose-500 w-4/12">Alamat</th>
                <th class="border-2 border-rose-500 w-1/12">Telepon</th>
                <th class="border-2 border-rose-500 w-2/12">Jabatan</th>
            </tr>
        </thead>
        <!-- buat isi -->
        <tbody class="text-center">
            @foreach ($result as $output)
            <tr>
                <td class="text-center border-2 border-rose-500">-</td>
                <td class="text-center border-2 border-rose-500">{{$output->kode_karyawan}}</p></td>
                <td class="text-justify border-2 border-rose-500 p-2.5">{{$output->nama_karyawan}}</p></td>
                <td class="text-justify border-2 border-rose-500 px-2.5">{{$output->alamat_karyawan}}</p></td>
                <td class="text-center border-2 border-rose-500">{{$output->telepon_karyawan}}</p></td>
                <td class="text-justify border-2 border-rose-500">{{$output->jabatan_karyawan}}</p></td>
            </tr>
            @endforeach
     </table>

     <!-- CDN tail -->
     <script src="https://cdn.tailwindcss.com"></script>

     <!-- Custom Javascript-->
     <script>
        //buat fungsi link tambah data (javascript ke html)
        function gotoAdd(){
            location.href="{{url('/add')}}"

            //biasa digunakan jika ingin mencetak/ review
            window.open("https://google.com")
        }

        //fungsi untuk refresh data (html ke js)
        document.querySelector("#btn_refresh").addEventListener('click',function(){
            location.href="{{url('/')}}"
        })
     </script>

</body>
</html>
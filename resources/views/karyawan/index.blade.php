<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Halaman Semua Karyawan</h1>

    <table>
        <thead>
            <th>Nama</th>
            <th>Umur</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->umur}}</td>
                    <td>
                        <a href="#">Detail</a>
                    </td>
                </tr>
            @endforeach

            

        </tbody>
    </table>

</body>
</html>
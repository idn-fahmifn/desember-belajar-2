<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>

    <style>
        .alert-success {
            width: 100vw;
            padding: 5px;
            background-color: #00ff0080;
        }
    </style>
</head>

<body>
    <h1>Halaman Semua Karyawan</h1>

    @if (session('berhasil'))
    <div class="alert-success">
        <h4>Berhasil!</h4>
        <span>{{session('berhasil')}}</span>
    </div>
    @endif

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
                    <form action="{{route('karyawan.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                        <a href="{{route('karyawan.detail', $item->id)}}">Detail</a>
                        <a href="{{route('karyawan.edit', $item->id)}}">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
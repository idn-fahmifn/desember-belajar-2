<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <style>
        .form-group {
            padding: 5px;
            margin: 5px;
        }

        .alert-error {
            width: 100vw;
            padding: 5px;
            background-color: #ff000080;
        }
    </style>
</head>

<body>
    <h1>Halaman Tambah Karyawan</h1>

    @if ($errors->any())
        <div class="alert-error">
            <h5>Whoops, Ada error</h5>
            <ol>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ol>
        </div>
    @endif



    <form action="{{route('karyawan.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Karyawan</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label for="">NIK</label>
            <input type="number" name="nik" required>
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur" required>
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <select name="gender" required>
                <option value="">-Pilih Gender-</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Tambah Data</button>
        </div>
    </form>

</body>

</html>
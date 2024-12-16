<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Umur</title>
</head>

<body>

    <h1>Halaman Form Cek Umur</h1>
    <p>Masukan umur anda dibawah.</p>
    

    <!-- area form -->
    <form action="{{route('proses-umur')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Masukan umur anda</label>
            <input type="number" name="umur" required>
        </div>
        <div class="form-group">
            <button type="submit">Cek sekarang</button>
        </div>
    </form>

    @if (session('gagal'))
        <span style="color: red;"> <b>Yaah, gagal.</b> {{session('gagal')}}</span>
    @endif


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
</head>

<body>
    <h1>Halaman Detail Karyawan</h1>
    <table>
        <tbody>
            <tr>
                <td>Nama Karyawan </td>
                <td>{{$data->nama}}</td>
            </tr>
            <tr>
                <td>Umur Karyawan </td>
                <td>{{$data->umur}}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>{{$data->nik}}</td>
            </tr>
            <tr>
                <td>Gender </td>
                <td>{{$data->gender}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
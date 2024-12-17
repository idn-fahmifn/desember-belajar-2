<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //deklarasi tabel karyawan
    protected $table = 'karyawan';

    // nama-nama column
    // definisikan column yang terdapat pada tabel
    protected $fillable = [
        'nama', 'nik', 'umur', 'gender'
    ];

    // shortcut memanggil/mendefinisikan semua column yang terdapat pada tabel
    // protected $guarded;

}

<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::all(); //memanggil semua data yang terdapat pada model Karyawan
        return view('karyawan.index', compact('data')); //menampilkan halaman karyawan.
    }

    public function detail($id)
    {
        $data = Karyawan::find($id); //menampilkan data secara spesifik.
        return view('karyawan.detail', compact('data')); //menampilkan halaman detail.
    }
}

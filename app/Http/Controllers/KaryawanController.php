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

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // validasi data input 
        $request->validate([
            'nama' => 'string|required|min:2|max:50',
            'umur' => 'integer|min:10|max:50|required',
            'nik' => 'string|min:5|max:6|unique:karyawan|required'
        ]);

        // mengambil semua nilai yang diinputkan dari form
        $input = $request->all();

        //kirim data ke database, melalui model Karyawan
        Karyawan::create($input);
        return redirect()->route('karyawan.index')->with('berhasil', 'Data berhasil dibuat');
    }

    public function edit($id)
    {
        $data = Karyawan::find($id);
        return view('karyawan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // validasi data input 
        $request->validate([
            'nama' => 'string|required|min:2|max:50',
            'umur' => 'integer|min:10|max:50|required',
            'nik' => 'string|min:5|max:6|required'
        ]);
        $data = Karyawan::find($id); //mencari data sesaui ID
        $input = $request->all(); //mengambil semua nilai yang ada di form
        $data->update($input); //mengedit data.
        return redirect()->route('karyawan.index')->with('berhasil', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = karyawan::find($id);
        $data->delete($id);
        return redirect()->route('karyawan.index')->with('berhasil', 'Data berhasil dihapus');


    }


}

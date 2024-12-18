<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KaryawanController;
use App\Http\Middleware\UmurMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// localhost:8000/
Route::get('/', function () {
    return view('welcome');
});

//Routing sederhana menampilkan respon
Route::get('fahmi', function () {

    $name = 'Abdullah'; //deklarasi variabel dan value
    return 'Nama saya adalah : ' . $name; //respon menampilkan variable
});

Route::get('halaman-fahmi', function () {
    $name = 'Fahmi Muhammad';
    return view('fahmi', compact('name')); //untuk menampilkan halaman fahmi.blade.php
});

// Routing dengan parameter
Route::get('profile/{name}', function ($name) {
    return 'Hallo, ini adalah profile ' . $name;
});

// Routing menampilkan parameter di halaman.
Route::get('halaman-profile/{i}', function ($name) {
    return view('profile', compact('name')); //untuk menampilkan parameter di halaman
});

// group routing
Route::prefix('training')->group(function () {


    // Routing yang berada di dalaman grup /training
    Route::get('laravel', function () {
        return 'Ini adalah training laravel.';
    });

    Route::get('mtcna', function () {
        return 'Ini adalah training mtcna.';
    });
    Route::get('mtcre', function () {
        return 'Ini adalah training mtcre.';
    });

    Route::get('cari/{param}', function ($training) {
        return 'Saya sedang mencari kelas : ' . $training;
    });
});

// Memberi nama pada routing.
Route::get('nama-fahmi', function () {
    return view('fahmi'); //ini mengarah ke fahmi.blade.php
})->name('fahmi');

Route::get('nama-profile', function () {
    return view('profile'); //ini mengarah ke profile.blade.php
})->name('profile');

// memberikan respon kepada route yang belum/tidak didefinisikan.
Route::fallback(function(){
    return 'whoops, 404 | Halaman tidak ada.';
});


// Study case cek umu

Route::prefix('umur')->group(function(){

    // Route untuk menampilkan form
    Route::get('cek-form', function(){
        return view('umur.form');
    })->name('form-umur');

    Route::get('berhasil', function(){
        return view('umur.berhasil');
    })->name('berhasil')->middleware(UmurMiddleware::class);

    // routing mengolah data
    Route::post('proses', function(Request $request){
        // membuat validasi input

        $request->validate([
            'umur' => 'required|min:1|max:100|integer'
        ]);
        // mengambil nilai untuk diproses
        $request->session()->put('umur', $request->umur);

        // arahkan setelah proses, ke routing berhasil.
        return redirect()->route('berhasil');

    })->name('proses-umur');
});
// Routing dengan controller.
Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('create-barang', [BarangController::class, 'create']);
Route::post('kirim-data', [BarangController::class, 'store'])->name('kirim-barang');
// controller resource.
Route::resource('biodata', BiodataController::class);
Route::get('cetak', [BiodataController::class, 'cetak'])->name('cetak.biodata');

Route::prefix('karyawan')->group(function(){

    // halaman index untuk menampilkan semua data karyawan.
    Route::get('data-karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

    // halaman detail untuk menampilkan data karyawan secara spesifik.
    Route::get('detail-karyawan/{param}', [KaryawanController::class, 'detail'])->name('karyawan.detail');

    // halaman menampilkan form.
    Route::get('tambah-karyawan', [KaryawanController::class, 'create'])->name('karyawan.create');

    // routing untuk mengirim halaman
    Route::post('kirim-karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');

    // Routing halaman edit
    Route::get('edit-karyawan/{param}', [KaryawanController::class, 'edit'])->name('karyawan.edit');

    // Routing update karyawan
    Route::put('update-karyawan/{param}', [KaryawanController::class, 'update'])->name('karyawan.update');

    //Route untuk hapus data
    Route::delete('hapus-karyawan/{param}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');



});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

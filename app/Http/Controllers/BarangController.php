<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return 'ini adalah halaman barang';
    }
    public function create()
    {
        return 'ini adalah halaman create barang';
    }
}
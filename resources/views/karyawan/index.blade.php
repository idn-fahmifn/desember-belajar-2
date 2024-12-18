
<!-- import template -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Halaman data karyawan</h4>
                        <a href="#" class="btn btn-success">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Nama Karyawan</th>
                                <th>NIK</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><a href="{{route('karyawan.detail', $item->id)}}" class="btn">{{$item->nama}}</a></td>
                                    <td>{{$item->nik}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
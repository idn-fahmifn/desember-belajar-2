@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Halaman Edit Karyawan</h4>
                    </div>

                    <!-- form-input -->
                    <form action="{{route('karyawan.update', $data->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group mt-3">
                            <label for="">Nama Karyawan</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{$data->nik}}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Umur</label>
                            <input type="number" class="form-control" name="umur" value="{{$data->umur}}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="{{$data->gender}}">{{$data->gender}}</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
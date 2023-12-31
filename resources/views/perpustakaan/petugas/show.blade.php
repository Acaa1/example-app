@extends('king.master')

@section('title', 'Detail Petugas')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Petugas</a></li>
                        <li class="breadcrumb-item active">Detail Petugas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Anggota : {{ $petugas[0]->nama_petugas }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Petugas</label>
                                    <input class="form-control" type="text" name="id" id="id" placeholder="Masukan ID" value="{{ $petugas[0]->id }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama_petugas">Nama</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama Petugas" value="{{ $petugas[0]->nama_petugas }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="judul" placeholder="Masukan Jabatan Petugas" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label>No Tlp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input class="form-control" name="tlp_petugas" value="{{ $petugas[0]->tlp_petugas }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_petugas" name="alamat_petugas" id="alamat_petugas">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="Masukan Alamat" value="{{ $petugas[0]->alamat_petugas }}" disabled>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection
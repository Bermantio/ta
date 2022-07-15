@extends('layout.v_template')
@section('title','Tambah Data Paket Sewa')

@section('content')
<div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Paket Sewa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <form action="insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input name="nama_paket" class="form-control" placeholder="Masukkan Nama Paket" value="{{ old('nama_paket') }}">
                                <div class="text-danger">
                                    @error('nama_paket')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Rincian</label>
                                <textarea rows="7" cols="70" name="rincian" class="form-control" value="{{ old('rincian') }}"></textarea>
                                <div class="text-danger">
                                    @error('rincian')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button> <a href="/sewa" class="btn btn-primary btn-sm">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            
            <!-- masukin kode disini -->
           
            </div>
            </div>
            
        </div>
        </section>
        </section>
</div>
@endsection
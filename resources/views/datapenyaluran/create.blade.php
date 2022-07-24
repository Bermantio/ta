@extends('layout.v_template')
@section('title','Tambah Data Penyaluran')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Penyaluran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datapenyaluran.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Transaksi</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" name="kode_transaksi" value="{{ old('kode_transaksi') }}" placeholder="Masukkan Kode Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Penyaluran</label>
                                <input type="date" class="form-control @error('tanggal_penyaluran') is-invalid @enderror" name="tanggal_penyaluran" value="{{ old('tanggal_penyaluran') }}" placeholder="Masukkan Tanggal Penyaluran">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Program</label>
                                <input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program') }}" placeholder="Masukkan Nama Program">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Mustahik</label>
                                <input type="text" class="form-control @error('nama_mustahik') is-invalid @enderror" name="nama_mustahik" value="{{ old('nama_mustahik') }}" placeholder="Masukkan Nama Mustahik">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Donasi</label>
                                <input type="text" class="form-control @error('jumlah_donasi') is-invalid @enderror" name="jumlah_donasi" value="{{ old('jumlah_donasi') }}" placeholder="Masukkan Jumlah Donasi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan Status">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>
@endsection
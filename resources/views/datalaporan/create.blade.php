@extends('layout.v_template')
@section('title','Tambah Data Laporan')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datalaporan.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kantor</label>
                                <input type="text" class="form-control @error('name_kantor') is-invalid @enderror" name="name_kantor" value="{{ old('name_kantor') }}" placeholder="Masukkan Nama Kantor">
                            </div>
                            

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Program</label>
                                <input type="text" class="form-control @error('jenis_program') is-invalid @enderror" name="jenis_program" value="{{ old('jenis_program') }}" placeholder="Masukkan Jenis Program">
                            </div>

                            <div class="form-group">
                                <label>Jenis </label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                                <option value="" selected disabled>-- Pilih Jenis --</option>
                                <option value="asli">Nama Asli</option>
                                <option value="anonim">Anonim</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Transaksi</label>
                                <input type="text" class="form-control @error('jenis_transaksi') is-invalid @enderror" name="jenis_transaksi" value="{{ old('jenis_transaksi') }}" placeholder="Masukkan Jenis Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Transaksi</label>
                                <input type="text" class="form-control @error('jumlah_transaksi') is-invalid @enderror" name="jumlah_transaksi" value="{{ old('jumlah_transaksi') }}" placeholder="Masukkan Jumlah Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status Pembayaran</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan Status Pembayaran">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
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
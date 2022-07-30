@extends('layout.v_template')
@section('title','Data Penyaluran')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penyaluran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datapenyaluran.update', $datapenyaluran->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Transaksi</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" name="kode_transaksi" value="{{ old('kode_transaksi', $datapenyaluran->kode_transaksi) }}" placeholder="Masukkan Kode Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Penyaluran</label>
                                <input type="date" class="form-control @error('tanggal_penyaluran') is-invalid @enderror" name="tanggal_penyaluran" value="{{ old('tanggal_penyaluran', $datapenyaluran->tanggal_penyaluran) }}" placeholder="Masukkan Tanggal Penyaluran">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Program</label>
                                <input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program', $datapenyaluran->name_program) }}" placeholder="Masukkan Nama Program">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Mustahik</label>
                                <input type="text" class="form-control @error('nama_mustahik') is-invalid @enderror" name="nama_mustahik" value="{{ old('nama_mustahik', $datapenyaluran->nama_mustahik) }}" placeholder="Masukkan Nama Mustahik">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="laki-laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi') }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nominal Penyaluran</label>
                                <input type="text" class="form-control @error('jumlah_donasi') is-invalid @enderror" name="jumlah_donasi" value="{{ old('jumlah_donasi', $datapenyaluran->jumlah_donasi) }}" placeholder="Masukkan Jumlah Donasi">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <button type="batal" class="btn btn-md btn-secondary">Batal</button>

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
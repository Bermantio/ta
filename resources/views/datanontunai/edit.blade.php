@extends('layout.v_template')
@section('title','Transaksi Non Tunai')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Non Tunai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datanontunai.update', $datanontunai->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Transaksi</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" name="kode_transaksi" value="{{ old('kode_transaksi', $datanontunai->kode_transaksi) }}" placeholder="Masukkan Kode Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Transaksi</label>
                                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', $datanontunai->tanggal_transaksi) }}" placeholder="Masukkan Tanggal Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Muzakki</label>
                                <input type="text" class="form-control @error('kode_zakki') is-invalid @enderror" name="kode_zakki" value="{{ old('kode_zakki', $datanontunai->kode_zakki) }}" placeholder="Masukkan Kode Muzakki">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Muzakki</label>
                                <input type="text" class="form-control @error('name_zakki') is-invalid @enderror" name="name_zakki" value="{{ old('name_zakki', $datanontunai->name_zakki) }}" placeholder="Masukkan Nama Muzakki">
                            </div>
                            
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor Telepon atau WhatsApp</label>
                                <input type="text" class="form-control @error('notelepon') is-invalid @enderror" name="notelepon" value="{{ old('notelepon') }}" placeholder="Masukkan Nomor">
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi') }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Program</label>
                                <input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program', $datanontunai->name_program) }}" placeholder="Masukkan Jenis Program">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="keterangan" class="form-control" value="{{ old('keterangan') }}">
                                <option value="" selected disabled>-- Donasi Sebagai --</option>
                                <option value="Hamba Allah">Donasi sebagai Hamba Allah</option>
                                <option value="Nama Asli">Donasi sebagai Nama Asli</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Berupa</label>
                                <select name="keterangan" class="form-control" value="{{ old('berupa') }}">
                                <option value="" selected disabled>-- Bentuk Donasi --</option>
                                <option value="Dengan Barang">Dengan Barang</option>
                                <option value="Dengan Uang">Dengan Uang</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nominal Transaksi</label>
                                <input type="text" class="form-control @error('jumlah_transaksi') is-invalid @enderror" name="jumlah_transaksi" value="{{ old('jumlah_transaksi', $datanontunai->jumlah_transaksi) }}" placeholder="Masukkan Jumlah Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Upload Bukti Transaksi</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $datanontunai->status) }}" placeholder="Masukkan Status">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>

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
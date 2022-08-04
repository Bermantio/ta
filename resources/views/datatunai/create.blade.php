@extends('layout.v_template')
@section('title','Transaksi Tunai')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Tunai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datatunai.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Transaksi</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" name="kode_transaksi" value="{{ old('kode_transaksi') }}" placeholder="Masukkan Kode Transaksi">
                            </div>

                            <div class="form-group">
                                <label>Kode Muzakki</label>
                                <select name="kode_muz" id="pilih" class="form-control" onchange="GetHarga(this.value)">
                                <option value="" selected disableb>-- Pilih Kode Muzakki --</option>
                                    @foreach ($niken as $buah)
                                        <option value="{{ $buah->kode_muzakki.'_'.$buah->name_muzakki }}">{{ $buah->kode_muzakki }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('kode_muz')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama Muzakki</label>
                                <input type="text" name="name_muz" id="name_muz" class="form-control" onchange="GetHarga(this.value)" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Program</label>
                                <select name="name_program" class="form-control">
                                <option value="" selected disableb>-- Pilih Program --</option>
                                    @foreach ($program as $meili)
                                        <option value="{{ $meili->name_program }}">{{ $meili->name_program }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('name_program')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Transaksi</label>
                                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}" placeholder="Masukkan Tanggal Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nominal Transaksi</label>
                                <input type="text" class="form-control @error('jumlah_transaksi') is-invalid @enderror" name="jumlah_transaksi" value="{{ old('jumlah_transaksi') }}" placeholder="Masukkan Jumlah Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan Status">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                        
                        <script> //relasi
                            function GetHarga() {
                            var idHarga = $('#pilih').val();
                            var name_muz =  idHarga.split("_");
                            var name_program =  idHarga.split("_");

                            $('#name_muz').val(name_muz[1]);
                            $('#name_program').val(name_program[2]);
                            }
                        </script>

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
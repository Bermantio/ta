@extends('layout.v_template')
@section('title','Data Program')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Program</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('dataprogram.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Program</label>
                                <input type="text" class="form-control @error('kode_program') is-invalid @enderror" name="kode_program" value="{{ old('kode_program') }}" placeholder="Masukkan Kode Program">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Program</label>
                                <input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program') }}" placeholder="Masukkan Program">
                            </div>

                            <div class="form-group">
                                <label>Jenis Program</label>
                                <select name="jenis_program" class="form-control" value="{{ old('jenis_program') }}">
                                <option value="" selected disabled>-- Pilih Jenis Program --</option>
                                <option value="Zakat">Zakat</option>
                                <option value="Infaq">Infaq</option>
                                <option value="Shadaqah">Shadaqah</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="date" class="form-control @error('tanggal_program') is-invalid @enderror" name="tanggal_program" value="{{ old('tanggal_program') }}" placeholder="Masukkan Tanggal Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukkan Deskripsi">
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
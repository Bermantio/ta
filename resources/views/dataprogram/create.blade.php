@extends('layout.v_template')
@section('title','Tambah Data Program')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Program</title>
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
                                <label>Nama Program Bencana</label>
                                <select name="name_program" class="form-control" value="{{ old('name_program') }}">
                                <option value="" selected disabled>-- Pilih Nama Program Bencana --</option>
                                <option value="banjir">Bencana Banjir</option>
                                <option value="longsor">Bencana Longsor</option>
                                <option value="tsunami">Bencana Tsunami</option>
                                <option value="gempa_bumi">Bencana Gempa Bumi</option>
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
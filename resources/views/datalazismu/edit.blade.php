@extends('layout.v_template')
@section('title','Edit Lazismu')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mustahik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datalazismu.update', $datalazismu->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Kantor</label>
                                <input type="text" class="form-control @error('kode_kantor') is-invalid @enderror" name="kode_kantor" value="{{ old('kode_kantor') }}" placeholder="Masukkan Kode Kantor">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kantor</label>
                                <input type="text" class="form-control @error('name_kantor') is-invalid @enderror" name="name_kantor" value="{{ old('name_kantor') }}" placeholder="Masukkan Nama Kantor">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Pimpinan</label>
                                <input type="text" class="form-control @error('name_pimpinan') is-invalid @enderror" name="name_pimpinan" value="{{ old('name_pimpinan') }}" placeholder="Masukkan Nama Pimpinan">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}" placeholder="Masukkan No Telepon">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
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
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
@endsection
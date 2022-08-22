@extends('layout.v_template')
@section('title','Data Muzakki')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Muzakki</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datamuzakki.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Muzakki</label>
                                <input type="text" class="form-control @error('kode_muzakki') is-invalid @enderror" name="kode_muzakki" value="{{ old('kode_muzakki') }}" placeholder="Masukkan Kode Muzakki">
                            </div>

                            <div class="form-group">
                                <label>Nama Muzakki</label>
                                <select name="name_muzakki" id="pilih" class="form-control" onchange="GetHarga(this.value)">
                                <option value="" selected disabled>-- Pilih Nama Muzakki --</option>
                                    @foreach ($puspan as $nikber)
                                        <option value="{{ $nikber->name }}">{{ $nikber->name }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a class="btn btn-primary" href="{{ route('datamuzakki.index') }}">BATAL</a>

                        </form> 
                        <script>
                            function GetHarga() {
                            var idHarga = $('#pilih').val();
                            var name =  idHarga.split("_");
                            
                            $('#name').val(name[0]);
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
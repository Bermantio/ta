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
                        <form action="{{ route('datamuzakki.update', $datamuzakki->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Muzakki</label>
                                <input type="text" class="form-control @error('kode_muzakki') is-invalid @enderror" name="kode_muzakki" value="{{ old('kode_muzakki', $datamuzakki->kode_muzakki) }}" placeholder="Masukkan Kode Muzakki">
                            </div>

                            <div class="form-group">
                                <label>Nama User</label>
                                <select name="name_user" class="form-control">
                                <option value="{{ $datamuzakki->name_user }}">{{ $datamuzakki->name_user }}</option>
                                    @foreach ($puspan as $meili)
                                        <option value="{{ $meili->name_user }}">{{ $meili->name_user }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger">
                                            @error('name_user')
                                                {{ $message }}
                                            @enderror
                                        </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Muzakki</label>
                                <input type="text" class="form-control @error('name_muzakki') is-invalid @enderror" name="name_muzakki" value="{{ old('name_muzakki', $datamuzakki->name_muzakki) }}" placeholder="Masukkan Nama Muzakki">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin', $datamuzakki->jenis_kelamin) }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="laki-laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $datamuzakki->alamat) }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi', $datamuzakki->profesi) }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Dibuat</label>
                                <input type="date" class="form-control @error('tanggal_dibuat') is-invalid @enderror" name="tanggal_dibuat" value="{{ old('tanggal_dibuat', $datamuzakki->tanggal_dibuat) }}" placeholder="Masukkan Tanggal">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $datamuzakki->keterangan) }}" placeholder="Masukkan Keterangan">
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
</body>
</html>
@endsection
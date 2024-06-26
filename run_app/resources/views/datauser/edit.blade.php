@extends('layout.v_template')
@section('title','Data User')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('datauser.update', $datauser->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $datauser->image) }}">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                            

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $datauser->name) }}" placeholder="Masukkan Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin', $datauser->jenis_kelamin) }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $datauser->alamat) }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $datauser->email) }}" placeholder="Masukkan Email">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('notelepon') is-invalid @enderror" name="notelepon" value="{{ old('notelepon', $datauser->notelepon) }}" placeholder="Masukkan No Telepon">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi', $datauser->profesi) }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" placeholder="Masukkan Password" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Ulangi Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" value="{{ old('password') }}" placeholder="Ulangi Password" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <label>Status User</label>
                                <select name="role" class="form-control" value="{{ old('role') }}">
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="Admin">Admin</option>
                                <option value="Penghimpun">Penghimpun</option>
                                <option value="Pendayagunaan">Pendayagunaan</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Muzakki">Muzakki</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a class="btn btn-primary" href="{{ route('datauser.index') }}">Batal</a>

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
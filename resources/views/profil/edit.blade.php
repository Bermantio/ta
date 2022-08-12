@extends('layout.v_template')
@section('title','Profil')

@section('content')

<!DOCTYPE html>
<html lang="en">
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4> Edit Profil</h4>
                    <form action="{{ route('profil.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $user->image) }}">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                            

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" placeholder="Masukkan Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin', $user->jenis_kelamin) }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $user->alamat) }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" placeholder="Masukkan Email">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('notelepon') is-invalid @enderror" name="notelepon" value="{{ old('notelepon', $user->notelepon) }}" placeholder="Masukkan No Telepon">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi', $user->profesi) }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" placeholder="Masukkan Password" required autocomplete="current-password">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Ulangi Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" value="{{ old('password') }}" placeholder="Ulangi Password" required autocomplete="current-password">
                            </div>
                            
                            <button type="submit" class="btn btn-md btn-primary">Update</button>

                    </form> 
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
@endsection
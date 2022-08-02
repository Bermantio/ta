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
                                <label class="font-weight-bold">Kode Penyaluran</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" name="kode_transaksi" value="{{ old('kode_transaksi', $datapenyaluran->kode_transaksi) }}" placeholder="Masukkan Kode Transaksi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Penyaluran</label>
                                <input type="date" class="form-control @error('tanggal_penyaluran') is-invalid @enderror" name="tanggal_penyaluran" value="{{ old('tanggal_penyaluran', $datapenyaluran->tanggal_penyaluran) }}" placeholder="Masukkan Tanggal Penyaluran">
                            </div>

                            <div class="form-group">
                                <label>Nama Program</label>
                                <select name="name_program" class="form-control">
                                <option value="" selected disableb>-- Pilih Nama Program --</option>
                                    @foreach ($namaprog as $meili)
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
                                <label>Nama Mustahik</label>
                                <select name="name" class="form-control">
                                <option value="" selected disableb>-- Pilih Nama Mustahik --</option>
                                    @foreach ($namahik as $nikber)
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
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin', $datapenyaluran->jenis_kelamin) }}">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $datapenyaluran->alamat) }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Profesi</label>
                                <input type="text" class="form-control @error('profesi') is-invalid @enderror" name="profesi" value="{{ old('profesi', $datapenyaluran->profesi) }}" placeholder="Masukkan Profesi">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nominal Penyaluran</label>
                                <input type="text" class="form-control @error('jumlah_donasi') is-invalid @enderror" name="jumlah_donasi" value="{{ old('jumlah_donasi', $datapenyaluran->jumlah_donasi) }}" placeholder="Masukkan Jumlah Donasi">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <button type="batal" class="btn btn-md btn-secondary">Batal</button>

                        </form> 
                        <script>
                            function GetHarga() {
                            var idHarga = $('#pilih').val();
                            var name_program =  idHarga.split("_");
                            var name =  idHarga.split("_");
                            
                            $('#name_program').val(name_program[1]);
                            $('#name').val(name[2]);
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
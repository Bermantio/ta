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
                                <label>Status</label>
                                <select name="status" class="form-control" value="{{ old('status') }}">
                                <option value="" selected disabled>-- Pilih Status --</option>
                                <option value="Menunggu Konfirmasi">Menunggu Konfimasi</option>
                                <option value="Selesai">Selesai</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <br>
                            <a href="{{ url('datanontunai') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>

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
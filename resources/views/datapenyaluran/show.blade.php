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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
   <div class="container mt-5">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title"><strong>Detail Data</strong></h3>
            </div>
        <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode Penyaluran</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->kode_transaksi }}</td>
                </tr>
                <tr>
                    <td width="150px">Tanggal Penyaluran</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->tanggal_penyaluran }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Program</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->name_program }}</td>
                </tr>   
                <tr>
                    <td width="150px">Nama Mustahik</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->name }}</td>
                </tr>   
                <tr>
                    <td width="150px">Jenis Kelamin</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->profesi }}</td>
                </tr>
                <tr>
                    <td width="150px">Jumlah Donasi</td>
                    <td width="30px">:</td>
                    <td>Rp. {{ number_format($datapenyaluran->jumlah_donasi) }}</td>
                </tr> 
            </table>

            <div class="pull-right">
            @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
            <a href="{{ route('datapenyaluran.edit', $datapenyaluran->id) }}" class="btn btn-secondary">Edit</a>
            @endif
            <a class="btn btn-primary" href="{{ route('datapenyaluran.index') }}"> Kembali</a>
        </div>
@endsection
@extends('layout.v_template')
@section('title','Detail Data Penyaluran')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penjualan Buah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
   <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="pull-left">
            <h2>Tampil Data Penyaluran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('datapenyaluran.index') }}"> Back</a>
        </div>
        
        <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode Transaksi</td>
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
                    <td>{{ $datapenyaluran->nama_mustahik }}</td>
                </tr>   
                <tr>
                    <td width="150px">Jumlah Donasi</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->jumlah_donasi }}</td>
                </tr> 
                <tr>
                    <td width="150px">Status</td>
                    <td width="30px">:</td>
                    <td>{{ $datapenyaluran->status }}</td>
                </tr> 
            </table>
@endsection
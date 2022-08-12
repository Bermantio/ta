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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
   <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="pull-left">
            <h2>Detail Data</h2>
        </div>
        
        <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Foto</td>
                    <td width="30px">:</td>
                    <td>{{ $datauser->image }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Lengkap</td>
                    <td width="30px">:</td> 
                    <td>{{ $datauser->name }}</td>
                </tr>
                <tr>
                    <td width="150px">Email</td>
                    <td width="30px">:</td>
                    <td>{{ $datauser->email }}</td>
                </tr> 
                <tr>
                    <td width="150px">Jenis Kelamin</td>
                    <td width="30px">:</td>
                    <td>{{ $datauser->jenis_kelamin }}</td>
                </tr>   
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datauser->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">No Telepon</td>
                    <td width="30px">:</td> 
                    <td>{{ $datauser->notelepon }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td> 
                    <td>{{ $datauser->profesi }}</td>
                </tr>   
                <tr>
                    <td width="150px">Status</td>
                    <td width="30px">:</td>
                    <td>{{ $datauser->role }}</td>
                </tr> 
            </table>

            <div class="pull-right">
            <a href="{{ route('datauser.edit', $datauser->id) }}" class="btn btn-secondary">Edit</a>
            <a class="btn btn-primary" href="{{ route('datauser.index') }}"> Kembali</a>
        </div>
@endsection
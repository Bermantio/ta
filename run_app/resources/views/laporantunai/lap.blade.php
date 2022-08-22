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
            <h2>LAPORAN KEUANGAN</h2>
                <a href="/" target="blank" class="btn btn-primary btn-sm">Cetak Laporan</a></br>
        </div>
        
        <br>
        <table class="table table-bordered">
        <thead>
            
        <tr>
                        <th colspan='7' >Pemasukan Penjualan</th>
                        </tr>
        <tr>
            <th width="50px">No</th>
            <th>Kode Transaksi</th>
            <th>Kode Muzakki</th>
            <th>Nama Muzakki</th>
            <th>Jumlah Transaksi</th>
            <th>Program</th>
            <th>Status</th>
        </tr>
        <?php 
        $no=1; 
        $nik=0; ?>
        
        @foreach ($laporan as $datatunai)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datatunai->kode_transaksi }}</td>
            <td>{{ $datatunai->kode_muz }}</td>
            <td>{{ $datatunai->name_muz }}</td>
            <td>{{ $penjual->hargas }}</td>
            <td>Rp. {{ number_format($datatunai->jumlah_transaksi) }}</td>
            <td>{{ $datatunai->name_program }}</td>
            <td>@if($datatunai->status == 1)
                        Sudah Pesan & Belum dibayar
                        @else
                        <strong>LUNAS</strong>
                        @endif</td>
        </tr>
            <tr>
                <td colspan="4" align="left"><strong>Total yang harus dibayarkan : Rp. {{ number_format($datatunai->jumlah_transaksi) }}</strong></td>        
            </tr>
        @endforeach
    </table>
    </div>
        </div>
            </div>
        </div>
    </div>
      
@endsection
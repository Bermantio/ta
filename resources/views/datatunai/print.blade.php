@extends ('layout.v_template');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.satic {
            position: relative;
            /*left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div calss="form-group">
        <p align="center"><b>Data Transaksi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
        </table>
    </div>

<body onload="window.print();">
<div>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-warning">
            
            <div class="card">
                <div class="card-body">
                    <h3>Transaksi Sukses</h3>
                    <h5>Transaksi Anda sudah <strong>LUNAS</strong> dengan nominal : 
                        <strong>Rp. {{ number_format($datatunai->jumlah_transaksi) }}</strong></h5>
                </div>
            </div>
            <div class="card-body">
                <h3><i class="fa fa-shopping-cart"></i> Detail Transaksi</h3>
                    @if(!empty($datatunai))
                    <p align="right">Tanggal Transaksi : {{ $datatunai->tanggal_transaksi }}</p>

                    <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode Transaksi</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->kode_transaksi }}</td>
                </tr>
                <tr>
                    <td width="150px">Kode Muzakki</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->kode_muz }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Muzakki</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->name_muz }}</td>
                </tr>
                <tr>
                    <td width="150px">Jenis Kelamin</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Nomor Telepon atau WhatsApp</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->notelepon }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->profesi }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Program</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->name_program }}</td>
                </tr>  
                <tr>
                    <td width="150px">Keterangan</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->keterangan }}</td>
                </tr>  
                <tr>
                    <td width="150px">Nominal Transaksi</td>
                    <td width="30px">:</td>
                    <td>Rp. {{ number_format($datatunai->jumlah_transaksi) }}</td>
                </tr>    
                <tr>
                    <td width="150px">Status</td>
                    <td width="30px">:</td>
                    <td>@if($datatunai->status == 1)
                        Sudah Pesan & Belum dibayar
                        @else
                        <strong>LUNAS</strong>
                        @endif</td>
                </tr> 
                <tr>
                    <td colspan="4" align="left"><strong>Total yang harus dibayarkan : Rp. {{ number_format($datatunai->jumlah_transaksi) }}</strong></td> 
                </tr>
            </table>
            @endif
            </div>
            </div>
        </div>
        </section>
</div>

</body>
</html>
@endsection
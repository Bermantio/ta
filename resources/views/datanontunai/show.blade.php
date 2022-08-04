@extends ('layout.v_template');
@section('title','Transaksi Non Tunai')

@section('content')

<div>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Data Transaksi Non Tunai</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Transaksi Sukses</h3>
                    <h5>Transaksi Anda sudah <strong>LUNAS</strong> dengan nominal : 
                        <strong>Rp. {{ $datanontunai->jumlah_transaksi }}</strong></h5>
                </div>
            </div>
            <div class="card-body">
                <h3><i class="fa fa-shopping-cart"></i> Detail Transaksi</h3>
                    @if(!empty($datanontunai))
                    <div class="card-tools">
                        <p align="right">Tanggal Transaksi : {{ $datanontunai->tanggal_transaksi }}</p>
                    </div>

                    <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode Transaksi</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->kode_transaksi }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Muzakki</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->name_zakki }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->profesi }}</td>
                </tr>
                <tr>
                    <td width="150px">Program</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->name_program }}</td>
                </tr>  
                <tr>
                    <td width="150px">Keterangan</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->keterangan }}</td>
                </tr>
                <tr>
                    <td width="150px">Berupa</td>
                    <td width="30px">:</td>
                    <td>{{ $datanontunai->berupa }}</td>
                </tr>
                <tr>
                    <td width="150px">Nominal Transaksi</td>
                    <td width="30px">:</td>
                    <td>Rp. {{ number_format($datanontunai->jumlah_transaksi) }}</td>
                </tr>
                    
                <tr>
                    <td width="150px">Status</td>
                    <td width="30px">:</td>
                    <td>@if($datanontunai->status == 1)
                        Sudah Pesan & Belum dibayar
                        @else
                        <strong>LUNAS</strong>
                        @endif</td>
                </tr> 
                <tr>
                    <td colspan="4" align="left"><strong>Total yang harus dibayarkan : Rp. {{ number_format($datanontunai->jumlah_transaksi) }}</strong></td>
                    
                </tr>
            </table>

            
            @endif
            <br>
            <a href="{{ url('print') }}" class="btn btn-primary"><i class="fa fa-print"></i>  Cetak</a>
            <a href="{{ url('datanontunai') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            </div>
        </div>
        </section>
</div>
@endsection
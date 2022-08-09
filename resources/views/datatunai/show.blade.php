@extends ('layout.v_template');
@section('title','Transaksi Tunai')

@section('content')

<div>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Data Transaksi Tunai</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Transaksi Sukses</h3>
                    <h5>Transaksi Anda sudah <strong>LUNAS</strong> dengan nominal : 
                        <strong>Rp. {{ number_format($datatunai->jumlah_transaksi+$datatunai->kode_transaksi) }}</strong></h5>
                </div>
            </div>
            <div class="card-body">
                <h3><i class="fa fa-shopping-cart"></i> Detail Transaksi</h3>
                    @if(!empty($datatunai))
                    <div class="card-tools">
                    <div align="right">
                        <a href="{{ url('print') }}" class="btn btn-warning"><i class="fa fa-print"></i>  Cetak</a>   
                        <a href="{{ url('datatunai') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div><br>
                        <p align="right">Tanggal Transaksi : {{ $datatunai->tanggal_transaksi }}</p>
                    </div>

                    <table class="table table-bordered">
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
                    <td width="150px">Program</td>
                    <td width="30px">:</td>
                    <td>{{ $datatunai->name_program }}</td>
                </tr> 
                <tr>
                    <td width="150px">Nominal Transaksi</td>
                    <td width="30px">:</td>
                    <td>Rp. {{ number_format($datatunai->jumlah_transaksi+$datatunai->kode_transaksi) }}</td>
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
                    <td colspan="4" align="left"><strong>Total Transaksi : Rp. {{ number_format($datatunai->jumlah_transaksi) }}</strong></td>  
                </tr>
                <tr>
                    <td colspan="4" align="left"><strong> Kode Unik : {{ number_format($datatunai->kode_transaksi) }}</strong></td>
                </tr>
                <tr>
                    <td colspan="4" align="left"><strong> Total Yang Harus Dibayarkan : Rp. {{ number_format($datatunai->jumlah_transaksi+$datatunai->kode_transaksi) }}</strong></td>
                </tr>
            </table>
            @endif
            <br>
            
            </div>
            </div>
        </div>
        </section>
</div>
@endsection
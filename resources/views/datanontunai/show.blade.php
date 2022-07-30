@extends ('layout.v_template');
@section('title','Detail Data Transaksi Non-Tunai')

@section('content')

<div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Detail Data Transaksi Non-Tunai</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Transaksi Sukses</h3>
                    <h5>Transaksi anda sudah <strong>LUNAS</strong> dengan nominal : 
                        <strong>Rp. {{ number_format($datanontunai->jumlah_transaksi) }}</strong></h5>
                </div>
            </div>
            <div class="card-body">
                <h3><i class="fa fa-shopping-cart"></i> Detail Transaksi</h3>
                    @if(!empty($datanontunai))
                    <a align="right" href="{{ url('datanontunai.print') }}" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
                    <p align="right">Tanggal Pesan : {{ $datanontunai->tanggal_transaksi }}</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Kode Muzakki</th>
                        <th>Nama Muzakki</th>
                        <th>Jumlah Transaksi</th>
                        <th>Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                        @forelse ($datanontunai as $datanontunais)
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datanontunai->kode_transaksi }}</td>
                            <td>{{ $datanontunai->kode_zakki }}</td>
                            <td>{{ $datanontunai->name_zakki }}</td>
                            <td>{{ $datanontunai->jumlah_transaksi }}</td>
                            <td>
                                @if($datanontunai->status == 1)
                                Sudah Pesan & Belum dibayar
                                @else
                                <strong>LUNAS</strong>
                                @endif
                            </td>
                            </tr>
                              @empty     
                        @endforelse
                        <tr>
                            <td colspan="5" align="right"><strong>Total yang harus dibayarkan :</strong></td>
                            <td align="right"><strong>Rp. {{ number_format($datanontunai->jumlah_transaksi) }}</strong></td>
                        </tr>
                </tbody>                       
            </table>
            @endif
            <br>
            <a href="{{ url('datanontunai') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
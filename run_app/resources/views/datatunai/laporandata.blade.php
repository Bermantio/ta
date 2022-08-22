<body onload="window.print();">
    <div class="section section-our-team-freebie">
        <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
<center>
            <div class="card-header">
                <h2 class="card-title"><b></b>LAPORAN KEUANGAN</b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table border="1" cellpadding="10px">
            <thead>
        <tr>
            <th colspan='8' >Pemasukan Penjualan</th>
            </tr>
        <tr>
            <th width="50px">No</th>
            <th>Kode Muzakki</th>
            <th>Nama Muzakki</th>
            <th>Tanggal Transaksi</th>
            <th>Name Program</th>
            <th>Jumlah Transaksi</th>
            <th>Status</th>
        </tr>
        <?php 
        $no=1; 
        $nik=0; ?>
        
        @foreach ($lapor2 as $penjual)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datatunai->kode_muz }}</td>
            <td>{{ $datatunai->name_muz }}</td>
            <td>{{ $datatunai->tanggal_transaksi }}</td>
            <td>{{ $datatunai->name_program }}</td>
            <td>{{ $datatunai->jumlah_transaksi }}</td>
            <td>{{ $datatunai->status }}</td>
        </tr>
        <?php
        $nik += $penjual->harga;
        ?>        
        @endforeach
        
        <tr style="background-color: #337ab7;color: white;">
                               
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>TOTAL</b></td>
                                <td><b>
                                    Rp. <?php
                                    echo number_format($nik, 0, ',', '.' ) ;
                                    ?>
                                </b></td>
                                <td></td>
                                <td></td>
                            </tr>
        
    </table>
</body>
</html>
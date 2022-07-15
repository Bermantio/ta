@extends ('layout.v_template');

@section('title','Detail Data Karyawan')

@section('content')
<div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Data Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Nama Karyawan</td>
                    <td width="30px">:</td>
                    <td>{{ $karyawan->nama_kry }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $karyawan->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Nomor HP</td>
                    <td width="30px">:</td>
                    <td>{{ $karyawan->nohp }}</td>
                </tr>
                <tr>
                    <td width="150px">Posisi</td>
                    <td width="30px">:</td>
                    <td>{{ $karyawan->posisi }}</td>
                </tr>   
                <tr>
                    <td width="150px">Gaji</td>
                    <td width="30px">:</td>
                    <td>{{ $karyawan->gaji }}</td>
                </tr>                                
            </table>
            <br><a href="/karyawan" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
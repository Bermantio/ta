@extends ('layout.v_template');
@section('title','Data Mustahik')

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
                <h3 class="card-title">Detail Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->kode }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->name }}</td>
                </tr>
                <tr>
                    <td width="150px">Jenis Kelamin</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->profesi }}</td>
                </tr>
                <tr>
                    <td width="150px">Keterangan</td>
                    <td width="30px">:</td>
                    <td>{{ $datamustahik->keterangan }}</td>
                </tr>                               
            </table>
            <br><a href="datamustahik" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
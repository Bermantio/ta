@extends ('layout.v_template');
@section('title','Data Muzakki')

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
                <h3 class="card-title">Data Muzakki</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Kode Muzakki</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->kode_muzakki }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama User</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->name_user }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Muzakki</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->name_muzakki }}</td>
                </tr>
                <tr>
                    <td width="150px">Jenis Kelamin</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td width="150px">Alamat</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->alamat }}</td>
                </tr>
                <tr>
                    <td width="150px">Profesi</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->profesi }}</td>
                </tr>
                <tr>
                    <td width="150px">Tanggal Dibuat</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->tanggal_dibuat }}</td>
                </tr>
                <tr>
                    <td width="150px">Keterangan</td>
                    <td width="30px">:</td>
                    <td>{{ $datamuzakki->keterangan }}</td>
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
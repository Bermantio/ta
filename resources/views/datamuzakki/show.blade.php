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
            </table>
            <a href="{{ route('datamuzakki.edit', $datamuzakki->id) }}" class="btn btn-secondary">Edit</a>
            <a class="btn btn-primary" href="{{ route('datamuzakki.index') }}"> Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
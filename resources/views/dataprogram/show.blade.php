@extends ('layout.v_template');
@section('title','Data Program')
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
                    <td width="150px">Kode Program</td>
                    <td width="30px">:</td>
                    <td>{{ $dataprogram->kode_program }}</td>
                </tr>
                <tr>
                    <td width="150px">Nama Program</td>
                    <td width="30px">:</td>
                    <td>{{ $dataprogram->name_program }}</td>
                </tr>
                <tr>
                    <td width="150px">Jenis Program</td>
                    <td width="30px">:</td>
                    <td>{{ $dataprogram->jenis_program }}</td>
                </tr>
                <tr>
                    <td width="150px">Tanggal Bencana</td>
                    <td width="30px">:</td>
                    <td>{{ $dataprogram->tanggal_program }}</td>
                </tr>
                <tr>
                    <td width="150px">Deskripsi</td>
                    <td width="30px">:</td>
                    <td>{{ $dataprogram->deskripsi }}</td>
                </tr>                               
            </table>
            <br>
            @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
            <a href="{{ route('dataprogram.edit', $dataprogram->id) }}" class="btn btn-secondary">Edit</a>
            @endif
            <a class="btn btn-primary" href="{{ route('dataprogram.index') }}"> Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
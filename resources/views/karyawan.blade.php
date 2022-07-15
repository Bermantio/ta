@extends('layout.v_template')
@section('title','Karyawan')

@section('content')
<div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->

            <table class="table table-bordered">
            <a href="/karyawan/add" class="btn btn-primary btn-sm">Tambah Karyawan</a><br><br>
            @if(session('message'))
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>Berhasil</h4>
            {{ session('message') }}.
            </div>
            @endif
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Posisi</th>
                    <th>Gaji</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($karyawan as $datakry)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$datakry->nama_kry}}</td>
                    <td>{{$datakry->alamat}}</td>
                    <td>{{$datakry->nohp}}</td>
                    <td>{{$datakry->posisi}}</td>
                    <td>{{$datakry->gaji}}</td>
                    <td>
                        <a href="/karyawan/detail/{{ $datakry->id }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/karyawan/edit/{{ $datakry->id }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#delete{{ $datakry->id }}">
                        	Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

            @foreach ($karyawan as $datakry)
            <div class="modal fade" id="delete{{ $datakry->id }}">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Delete Data {{ $datakry->nama_kry}}</h4>
                
                </div>
                <div class="modal-body">
                <p>Yakin ingin menghapus data ini ?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="karyawan/delete/{{$datakry->id}}" class="btn btn-danger">Oke</a>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        @endforeach

            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
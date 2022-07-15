@extends('layout.v_template')
@section('title','Paket Sewa')

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
                <h3 class="card-title">Paket Sewa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->

            <table class="table table-bordered">
            <a href="/sewa/add" class="btn btn-primary btn-sm">Tambah Paket Sewa</a><br><br>
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
                    <th>Nama Paket</th>
                    <th>Foto</th>
                    <th>Rincian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($sewa as $datawo)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$datawo->nama_paket}}</td>
                    <td><img src="foto_paket/{{ $datawo->foto }}" width="100px;" alt="image"></td>
                    <td>{{$datawo->rincian}}</td>
                    <td>
                        <a href="/sewa/detail/{{ $datawo->id }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/sewa/edit/{{ $datawo->id }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#delete{{ $datawo->id }}">
                        	Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

            @foreach ($sewa as $datawo)
            <div class="modal fade" id="delete{{ $datawo->id }}">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Delete Data {{ $datawo->nama_paket}}</h4>
                
                </div>
                <div class="modal-body">
                <p>Yakin ingin menghapus data ini ?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="sewa/delete/{{$datawo->id}}" class="btn btn-danger">Oke</a>
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
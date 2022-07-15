@extends('layout.v_template')
@section('title','Pengeluaran')

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
                <h3 class="card-title">Pengeluaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->

            <table class="table table-bordered">
            <a href="/luaran/add" class="btn btn-primary btn-sm">Tambah Pengeluaran</a><br><br>
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
                    <th>Nama Pengeluaran</th>
                    <th>Tanggal Pengeluaran</th>
                    <th>Kategori</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($luaran as $datapeng)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$datapeng->nama_pengeluaran}}</td>
                    <td>{{$datapeng->tgl_pengeluaran}}</td>
                    <td>{{$datapeng->nama_kategori}}</td>
                    <td>{{$datapeng->pengeluaran}}</td>
                    <td>
                        <a href="/kategori/detail/{{ $datapeng->id }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/kategori/edit/{{ $datapeng->id }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#delete{{ $datapeng->id }}">
                        	Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

            @foreach ($luaran as $datapeng)
            <div class="modal fade" id="delete{{ $datapeng->id }}">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Delete Data {{ $datapeng->nama_kategori}}</h4>
                
                </div>
                <div class="modal-body">
                <p>Yakin ingin menghapus data ini ?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="kategori/delete/{{$datapeng->id}}" class="btn btn-danger">Oke</a>
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
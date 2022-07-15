@extends ('layout.v_template');

@section('title','Detail Kategori Pengeluaran')

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
                <h3 class="card-title">Detail Kategori Pengeluaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="150px">Nama Kategori</td>
                    <td width="30px">:</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                </tr>                              
            </table>
            <br><a href="/kategori" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
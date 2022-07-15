@extends ('layout.v_template');

@section('title','Detail Paket Sewa')

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
                <h3 class="card-title">Detail Paket Sewa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <table class="table table-bordered">
                <tr>
                    <td width="100px">Nama Paket</td>
                    <td width="30px">:</td>
                    <td>{{ $sewa->nama_paket }}</td>
                </tr>
                <tr>
                    <td width="100px">Foto</td>
                    <td width="30px">:</td>
                    <td><img src="{{url('foto_paket/'.$sewa->foto)}}" width="100px;" alt="image"></td>
                </tr>
                <tr>
                    <td width="100px">Rincian</td>
                    <td width="30px">:</td>
                    <td><textarea rows="8" cols="120">{{ $sewa->rincian }}</textarea></td>
                </tr>                                        
            </table>
            <br><a href="/sewa" class="btn btn-primary btn-sm">Kembali</a>
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
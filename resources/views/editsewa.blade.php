@extends ('layout.v_template');

@section('title','Edit Sewa')

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
                <h3 class="card-title">Edit Paket Sewa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <form action="update/{{$sewa->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input name="nama_paket" class="form-control" value="{{ $sewa->nama_paket }}">
                                <div class="text-danger">
                                    @error('nama_paket')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <img src="{{url('foto_paket/'.$sewa->foto)}}" width="100px">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>Ganti Foto Paket</label>
                                    <input type="file" name="foto" class="form-control">
                                    <div class="text-danger">
                                        @error('foto')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Rincian</label>
                                <textarea class="form-control" name="rincian" rows="5">{{ old('rincian', $sewa->rincian) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('rincian')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button> <a href="/sewa" class="btn btn-primary btn-sm">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <!-- masukin kode disini -->
           
            </div>
            </div>
        </div>
        </section>
        </section>
</div>
@endsection
@extends('layout.v_template')
@section('title','Tambah Kategori Pengeluaran')

@section('content')
<div>
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Kategori Pengeluaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <form action="insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Pengeluaran</label>
                                <input name="nama_pengeluaran" class="form-control" placeholder="Masukkan Nama Pengeluaran" value="{{ old('nama_pengeluaran') }}">
                                <div class="text-danger">
                                    @error('nama_pengeluaran')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengeluaran</label>
                                <input name="tgl_pengeluaran" class="form-control" placeholder="Masukkan Tanggal Pengeluaran" value="{{ old('tgl_pengeluaran') }}">
                                <div class="text-danger">
                                    @error('tgl_pengeluaran')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kategori Pengeluaran</label>
                                <select name="nama_kategori" class="form-control" style="width:350px">
                                <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @foreach ($nama_kategori as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('nama_kategori')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Pengeluaran</label>
                                <input name="pengeluaran" class="form-control" placeholder="Masukkan Jumlah Pengeluaran" value="{{ old('pengeluaran') }}">
                                <div class="text-danger">
                                    @error('pengeluaran')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button> <a href="/luaran" class="btn btn-primary btn-sm">Batal</a>
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
  <script type="text/javascript">
var gaji = document.getElementById("gaji");
gaji.addEventListener("keyup", function(e) {
  gaji.value = convertGaji(this.value, "Rp. ");
});
gaji.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});
 
function convertGaji(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split  = number_string.split(","),
    sisa   = split[0].length % 3,
    gaji = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
 
	if (ribuan) {
		separator = sisa ? "." : "";
		gaji += separator + ribuan.join(".");
	}
 
	gaji = split[1] != undefined ? gaji + "," + split[1] : gaji;
	return prefix == undefined ? gaji : gaji ? prefix + gaji : "";
}
 
function isNumberKey(evt) {
    key = evt.which || evt.keyCode;
	if ( 	key != 188 // Comma
		 && key != 8 // Backspace
		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
		 && (key < 48 || key > 57) // Non digit
		) 
	{
		evt.preventDefault();
		return;
	}
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="nama_kategori"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>
@endsection
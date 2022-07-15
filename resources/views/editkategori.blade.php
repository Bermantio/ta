@extends ('layout.v_template');

@section('title','Edit Kategori Pengeluaran')

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
                <h3 class="card-title">Edit Kategori Pengeluaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- masukin kode disini -->
            <form action="update/{{$kategori->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}">
                                <div class="text-danger">
                                    @error('nama_kategori')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button> <a href="/kategori" class="btn btn-primary btn-sm">Batal</a>
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
@endsection
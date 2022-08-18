@extends('layout.v_template')
@section('title','Data Mustahik')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mustahik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi Non Tunai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable_filter" >
                        <a href="{{ route('datamustahik.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                            <label>
                                <form action="/search6" method="get">
                                <input type="search" name="search" class="form-contr ol form-control-sm">
                                <button type="submit" class="btn btn-secondary">Search</button>
                                </form>
                            </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="datatable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="datatable_info">
                  <tbody>
                  <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Mustahik</th>
                            <th scope="col">Nama Mustahik</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Profesi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @forelse ($datamustahiks as $datamustahik)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datamustahik->kode }}</td>
                            <td>{{ $datamustahik->name }}</td>
                            <td>{{ $datamustahik->jenis_kelamin }}</td>
                            <td>{{ $datamustahik->alamat }}</td>
                            <td>{{ $datamustahik->profesi }}</td>
                            <td>{{ $datamustahik->keterangan }}</td>
                            <td class="text-center">
                            <a href="{{ route('datamustahik.show', $datamustahik->id) }}" class="btn btn-sm btn-warning">DETAIL</a>    
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datamustahik.destroy', $datamustahik->id) }}" method="POST">
                                       
                                <a href="{{ route('datamustahik.edit', $datamustahik->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                            
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Belum Tersedia
                            </div>
                        @endforelse
                    </tbody>
                    </table></div></div>
                
                </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                              </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
@endsection
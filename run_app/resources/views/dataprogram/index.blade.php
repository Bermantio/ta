@extends('layout.v_template')
@section('title')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Program ZIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Program ZIS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable_filter" >
                        <a href="{{ route('dataprogram.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                            <label>
                                <form action="/search4" method="get">
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
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Program</th>
                                <th scope="col">Nama Program</th>
                                <th scope="col">Jenis Program</th>
                                <th scope="col">Tanggal </th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($dataprograms as $dataprogram)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dataprogram->kode_program }}</td>
                                    <td>{{ $dataprogram->name_program }}</td>
                                    <td>{{ $dataprogram->jenis_program }}</td>
                                    <td>{{ $dataprogram->tanggal_program }}</td>
                                    <td>{{ $dataprogram->deskripsi }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dataprogram.destroy', $dataprogram->id) }}" method="POST">
                                        <a href="{{ route('dataprogram.show', $dataprogram->id) }}" class="btn btn-sm btn-warning">DETAIL</a>
                                        @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
                                        <a href="{{ route('dataprogram.edit', $dataprogram->id) }}" class="btn btn-sm btn-secondary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Belum Tersedia
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          {{$dataprograms->links()}}   
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
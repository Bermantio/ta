@extends('layout.v_template')
@section('title','Data User')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable_filter" >
                        <a href="{{ route('datauser.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                            <label>
                                <form action="/search1" method="get">
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
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Profesi</th>
                                <th scope="col">Status User</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($datausers as $datauser)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $datauser->name }}</td>
                                    <td>{{ $datauser->jenis_kelamin }}</td>
                                    <td>{{ $datauser->alamat }}</td>
                                    <td>{{ $datauser->notelepon }}</td>
                                    <td>{{ $datauser->profesi }}</td>
                                    <td>{{ $datauser->role }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datauser.destroy', $datauser->id) }}" method="POST">
                                       
                                        <a href="{{ route('datauser.edit', $datauser->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="{{ route('datauser.show', $datauser->id) }}" class="btn btn-sm btn-primary">DETAIL</a>
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
                          </table>  
                          {{$datausers->links()}}
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
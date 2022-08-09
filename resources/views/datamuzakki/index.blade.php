@extends('layout.v_template')
@section('title','Data Muzakki')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Muzakki</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('datamuzakki.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <div class="col-md-4">
                            <form action="/search" method="get">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-warning">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div> <br>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Kode Muzakki</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Nama Muzakki</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Profesi</th>
                                <th scope="col">Tanggal Dibuat</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($datamuzakkis as $datamuzakki)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/datamuzakkis/').$datamuzakki->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $datamuzakki->kode_muzakki }}</td>
                                    <td>{{ $datamuzakki->name_user }}</td>
                                    <td>{{ $datamuzakki->name_muzakki }}</td>
                                    <td>{{ $datamuzakki->jenis_kelamin }}</td>
                                    <td>{{ $datamuzakki->alamat }}</td>
                                    <td>{{ $datamuzakki->profesi }}</td>
                                    <td>{{ $datamuzakki->tanggal_dibuat }}</td>
                                    <td>{{ $datamuzakki->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datamuzakki.destroy', $datamuzakki->id) }}" method="POST">
                                        <a href="{{ route('datamuzakki.show', $datamuzakki->id) }}" class="btn btn-sm btn-warning">DETAIL</a>
                                        <a href="{{ route('datamuzakki.edit', $datamuzakki->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
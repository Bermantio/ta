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
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('datamustahik.create') }}" class="btn  btn-success ">TAMBAH DATA</a>
                    <div align="right">
                        <div class="col-md-4">
                            <form action="/search" method="get">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-md btn-warning mb-3">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div> <br>
                        <table class="table table-bordered">
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
                          </table>  
                    {{$datamustahiks->links()}}
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
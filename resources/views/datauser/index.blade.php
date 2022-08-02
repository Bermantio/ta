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
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('datauser.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode User</th>
                                <th scope="col">Username</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telp</th>
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
                                    <td>{{ $datauser->kode_user }}</td>
                                    <td>{{ $datauser->name_user }}</td>
                                    <td>{{ $datauser->nama_lengkap }}</td>
                                    <td>{{ $datauser->jenis_kelamin }}</td>
                                    <td>{{ $datauser->alamat }}</td>
                                    <td>{{ $datauser->email }}</td>
                                    <td>{{ $datauser->notelp }}</td>
                                    <td>{{ $datauser->profesi }}</td>
                                    <td>{{ $datauser->status }}</td>
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
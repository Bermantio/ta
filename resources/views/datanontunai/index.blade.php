@extends('layout.v_template')
@section('title','Transaksi Non Tunai')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Non Tunai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('datanontunai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
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
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Nama Muzakki</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Profesi</th>
                                <th scope="col">Nama Program</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Nominal Transaksi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($datanontunais as $datanontunai)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $datanontunai->tanggal_transaksi }}</td>
                                    <td>{{ $datanontunai->name_zakki }}</td>
                                    <td>{{ $datanontunai->alamat }}</td>
                                    <td>{{ $datanontunai->profesi }}</td>
                                    <td>{{ $datanontunai->name_program }}</td>
                                    <td>{{ $datanontunai->keterangan }}</td>
                                    <td>Rp. {{ number_format($datanontunai->jumlah_transaksi) }}</td>
                                    <td>{{ $datanontunai->status }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datanontunai.destroy', $datanontunai->id) }}" method="POST">
                                        <a href="{{ route('datanontunai.show', $datanontunai->id) }}" class="btn btn-sm btn-warning">DETAIL</a>
                                        <a href="{{ route('datanontunai.edit', $datanontunai->id) }}" class="btn btn-sm btn-warning">EDIT</a>
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
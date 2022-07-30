@extends('layout.v_template')
@section('title','Transaksi Tunai')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Tunai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('datatunai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Kode Muzakki</th>
                                <th scope="col">Nama Muzakki</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Jumlah Transaksi</th>
                                <th scope="col">Program</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($datatunais as $datatunai)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $datatunai->kode_transaksi }}</td>
                                    <td>{{ $datatunai->kode_muz }}</td>
                                    <td>{{ $datatunai->name_muz }}</td>
                                    <td>{{ $datatunai->tanggal_transaksi }}</td>
                                    <td>Rp. {{ number_format($datatunai->jumlah_transaksi) }}</td>
                                    <td>{{ $datatunai->name_program }}</td>
                                    <td>
                                        @if($datatunai->status == 1)
                                        Sudah Pesan & Belum dibayar
                                        @else
                                        <strong>LUNAS</strong>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datatunai.destroy', $datatunai->id) }}" method="POST">
                                        <a href="{{ route('datatunai.show', $datatunai->id) }}" class="btn btn-sm btn-warning">DETAIL</a>
                                        <a href="{{ route('datatunai.edit', $datatunai->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Muzakki belum Tersedia.
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
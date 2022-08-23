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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</head>

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Muzakki</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable_filter" >
                            <a href="{{ route('datamuzakki.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                            <label>
                                <form action="/search" method="get">
                                <input type="search" name="search" placeholder="Nama Muzakki" class="form-contr ol form-control-sm">
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
                                <th scope="col">Kode Muzakki</th>
                                <th scope="col">Nama Muzakki</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                            @forelse ($datamuzakkis as $datamuzakki)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $datamuzakki->kode_muzakki }}</td>
                                    <td>{{ $datamuzakki->name_muzakki }}</td>
                                    <td>{{ $datamuzakki->alamat }}</td>
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
                  
                </tbody>
                </table>
                {{$datamuzakkis->links()}}
            </div>
        </div>
                
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

    <!-- DataTables  & Plugins -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>

</body>
</html>
@endsection
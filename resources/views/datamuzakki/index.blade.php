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

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dt-buttons btn-group flex-wrap">
                                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable" type="button">
                                    <span>Copy</span></button>
                                    <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="datatable" type="button">
                                    <span>CSV</span></button>
                                    <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable" type="button">
                                    <span>Excel</span></button>
                                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable" type="button">
                                    <span>PDF</span></button>
                                    <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="datatable" type="button">
                                    <span>Print</span></button> 
                                    <div class="btn-group">
                                    <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable" type="button" aria-haspopup="true">
                                    <span>Column visibility</span>
                                    <span class="dt-down-arrow">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable_filter" class="dataTables_filter">
                        <label>
                            Search:
                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
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
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Profesi</th>
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
                                    <td>{{ $datamuzakki->jenis_kelamin }}</td>
                                    <td>{{ $datamuzakki->alamat }}</td>
                                    <td>{{ $datamuzakki->profesi }}</td>
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
                </table></div></div><div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatable_previous">
                                    <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                </li>
                                <li class="paginate_button page-item next" id="datatable_next">
                                    <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
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
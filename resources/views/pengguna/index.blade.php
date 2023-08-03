@extends('pages/main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Pengguna</h2>
  </div>
                <div class="card">
                  <div class="card-body">
                    <div id="dataTable_wrapper" class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                        <br>
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Pegawai</th>
                            <th>Jabatan</th>
                            <th>Hak Akses</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>  
                          <tr>
                          @foreach ($tampildata as $pengguna)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengguna->nama }}</td>
                            <td>{{ $pengguna->no_pegawai }}</td>
                            <td>{{ $pengguna->jabatan }}</td>
                            <td>{{ $pengguna->hak_akses }}</td>
                            <td>
                                <a href="/editpengguna/{{$pengguna->id}}" class="badge bg-warning"><span class="menu-icon"><i class="far fa-edit"></i></span></a>
                                <form action="/deletepengguna/{{$pengguna->id}}" method="get" class="d-inline">
                                  @csrf
                                <button class="badge bg-danger border-0"><span class="menu-icon"><i class="fas fa-trash"></i></span></button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection
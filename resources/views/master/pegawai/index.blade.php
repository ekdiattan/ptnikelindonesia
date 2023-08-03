@extends('pages/main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Pegawai</h2>
  </div>
                <div class="card">
                  <div class="card-body">
                  <a href="/tambahpegawai">
                      <button type="button" class="btn btn-primary">Tambah Pegawai</button>
                  </a>
                    <div id="dataTable_wrapper" class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                        <br>
                        <thead>
                       
                          <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Nomor Pegawai</th>
                            <th>Jabatan</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>  
                        @foreach ($tampildata as $pegawai)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pegawai->nama_pegawai }}</td>
                            <td>{{ $pegawai->no_pegawai }}</td>
                            <td>{{ $pegawai->jabatan }}</td>
                            <td>{{ $pegawai->jeniskelamin }}</td>
                            <td>
                                <a href="/editpegawai/{{$pegawai->id}}" class="badge bg-warning"><span class="menu-icon"><i class="far fa-edit"></i></span></a>
                                  <form action="/deletepegawai/{{$pegawai->id}}" method="get" class="d-inline">
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
@extends('pages/main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Kendaraan</h2>
  </div>
                <div class="card">
                  <div class="card-body">
                  <a href="/tambahkendaraan">
                      <button type="button" class="btn btn-primary">Tambah Kendaraan</button>
                  </a>
                    <div id="dataTable_wrapper" class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                        <br>
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Kendaraan</th>
                            <th>Nomor Kendaraan</th>
                            <th>Jenis Kendaraan</th>
                            <th>Nama Vendor</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>  
                          @foreach ($kendaraan as $kendaraan)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$kendaraan->nama_merk}}</td>
                            <td>{{$kendaraan->no_kendaraan}}</td>
                            <td>{{$kendaraan->jenis_kendaraan}}</td>
                            <td>{{$kendaraan->nama_vendor}}</td>
                            <td>
                                <a href="/editkendaraan/{{$kendaraan->id}}" class="badge bg-warning"><span class="menu-icon"><i class="far fa-edit"></i></span></a>
                                  <form action="/deletekendaraan/{{$kendaraan->id}}" method="get" class="d-inline">
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
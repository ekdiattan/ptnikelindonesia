@extends('pages/main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Peminjaman Kendaraan</h2>
  </div>
                <div class="card">
                  <div class="card-body">
                    <div id="dataTable_wrapper" class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                        <br>
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Merk</th>
                            <th>Nama Driver</th>
                            <th>Nama Region</th>
                            <th>Tujuan Blok</th>
                            <th>Jumlah Bensin Awal (L)</th>
                            <th>Status Pemesanan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody> 
                        @foreach ($pengajuan as $tampildata) 
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tampildata->nama_merk}}</td>
                            <td>{{$tampildata->nama_driver}}</td>
                            <td>{{$tampildata->nama_region}}</td>
                            <td>{{$tampildata->tujuan_blok}}</td>
                            <td>{{$tampildata->jumlah_bensin_awal}}</td>
                            <td>{{$tampildata->status_pemesanan}}</td>
                            <td>
                                <a href="/editbooking/{{$tampildata->id}}" class="badge bg-warning"><span
                                                class="menu-icon"><i class="far fa-edit"></i></span></a>
                              <form action="" method="get" class="d-inline">
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
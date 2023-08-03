@extends('pages/main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Data Blok</h2>
  </div>
                <div class="card">
                  <div class="card-body">
                    <a href="/tambahblok">
                      <button type="button" class="btn btn-primary">Tambah Blok</button>
                    </a>

                    <div id="dataTable_wrapper" class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                        <br>
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Blok</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>  
                          @foreach ($tampildata as $tampildata)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tampildata->nama_blok}}</td>
                            <td>{{$tampildata->alamat}}</td>
                            <td>{{$tampildata->kota}}</td>
                            <td>{{$tampildata->provinsi}}</td>
                            <td>
                                <a href="/editblok/{{$tampildata->id}}" class="badge bg-warning"><span class="menu-icon"><i class="far fa-edit"></i></span></a>
                                <form action="/deletekendaraan/{{$tampildata->id}}" method="get" class="d-inline">
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
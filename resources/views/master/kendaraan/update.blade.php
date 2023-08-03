@extends('pages/main')

@section('content')
<form action="/editkendaraans/{{ $kendaraan->id}}" method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
          <p class="card-description">Edit Kendaraan</p>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Merk</label>
                      <input type="text" class="form-control" id="nama_merk" name="nama_merk" value="{{ $kendaraan->nama_merk }}"/>                       
                      </div>
                    <div class="col-sm-6">
                      <label>Nomor Kendaraan</label>
                      <input  type="text" class="form-control" id="no_kendaraan" name="no_kendaraan" value="{{ $kendaraan->no_kendaraan }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                            <option>{{$kendaraan->jenis_kendaraan}}</option>    
                            <option>Angkutan Orang</option>    
                            <option>Angkutan Barang</option>    
                        </select>    
                    </div>
                    <div class="col-sm-6">
                      <label>Nama Vendor</label>
                      <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" value="{{ $kendaraan->nama_vendor }}">    
                    </div>
                  </div>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Update</button>
                  </div>
                </form>
                <br>
              </div>
            </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@endsection
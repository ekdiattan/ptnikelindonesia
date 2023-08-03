@extends('pages/main')

@section('content')
<form action="/tambahregions" method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
          <p class="card-description">Tambah Region</p>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Region</label>
                      <input type="text" class="form-control" id="nama_region" name="nama_region"/>                       
                      </div>
                    <div class="col-sm-6">
                      <label>Alamat</label>
                      <input  type="text" class="form-control" id="alamat" name="alamat" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Kota</label>
                      <input type="text" class="form-control" id="kota" name="kota">    
                    </div>
                    <div class="col-sm-6">
                      <label>Provinsi</label>
                      <input type="text" class="form-control" id="provinsi" name="provinsi">    
                    </div>
                  </div>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Buat</button>
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
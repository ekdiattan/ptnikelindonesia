@extends('pages/main')

@section('content')
<form action="/editbloks/{{ $tampildata->id}}" method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
          <p class="card-description">Edit Blok</p>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Blok</label>
                      <input type="text" class="form-control" id="nama_blok" name="nama_blok" value="{{ $tampildata->nama_blok }}"/>                       
                      </div>
                    <div class="col-sm-6">
                      <label>Alamat</label>
                      <input  type="text" class="form-control" id="alamat" name="alamat" value="{{ $tampildata->alamat }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Kota</label>
                      <input type="text" class="form-control" id="kota" name="kota" value="{{ $tampildata->kota }}">    
                    </div>
                    <div class="col-sm-6">
                      <label>Provinsi</label>
                      <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $tampildata->provinsi }}">    
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
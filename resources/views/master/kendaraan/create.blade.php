@extends('pages/main')

@section('content')
<form action="/tambahkendaraans" method="post" enctype="multipart/form-data">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
            <p class="card-description">Tambah Kendaraan</p>
                  @csrf
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Merk</label>
                      <input type="text" class="form-control" id="nama_merk" name="nama_merk"/>                   
                      </div>
                    <div class="col-sm-6">
                      <label>No Kendaraan</label>
                      <input  type="text" class="form-control" id="no_kendaraan" name="no_kendaraan" >
                      <div id="username-message"></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                            <option>Angkutan Orang</option>    
                            <option>Angkutan Barang</option>    
                        </select>      
                    </div>
                    <div class="col-sm-6">
                      <label>Nama Vendor</label>
                      <input type="text" class="form-control" id="nama_vendor" name="nama_vendor">    
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" id="submit-btn">Buat</button>
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
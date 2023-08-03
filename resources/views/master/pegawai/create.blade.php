@extends('pages/main')

@section('content')
<form action="/tambahpegawais" method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
          <p class="card-description">Tambah Pegawai</p>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Pegawai</label>
                      <input type="text" class="form-control" id="nama_merk" name="nama_pegawai"/>                       
                      </div>
                    <div class="col-sm-6">
                      <label>Nomor Pegawai</label>
                      <input  type="text" class="form-control" id="no_pegawai" name="no_pegawai">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Jabatan</label>
                      <select class="form-control" id="jabatan" name="jabatan">
                          <option>Tenaga Administrasi</option>    
                          <option>Driver</option>    
                          <option>Pimpinan</option>    
                        </select>     
                    </div>
                    <div class="col-sm-6">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">    
                    </div>
                    <div class="col-sm-6">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">    
                    </div>
                    <div class="col-sm-6">
                      <label>Umur</label>
                      <input type="text" class="form-control" id="umur" name="umur">    
                    </div>
                    <div class="col-sm-6">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat">    
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
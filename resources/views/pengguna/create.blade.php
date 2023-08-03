@extends('pages/main')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
         <form action="/tambahpenggunas" method="post" enctype="multipart/form-data">
          <p class="card-description">Tambah Pengguna</p>
                  @csrf
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama"/>                      
                      </div>
                    <div class="col-sm-6">
                      <label>No Pegawai</label>
                      <input  type="text" class="form-control p_input" id="no_pegawai" name="no_pegawai" >
                      <div id="username-message"></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Jabatan</label>
                      <input type="text" class="form-control p_input" id="jabatan" name="jabatan">    
                    </div>
                    <div class="col-sm-6">
                    <label for="exampleFormControlSelect2">Hak Akses</label> 
                        <select class="form-control" id="hak_akses" name="hak_akses"> 
                          <option>Admin</option>    
                          <option>Penyetuju</option>    
                        </select>
                    </div>
                    <div class="col-sm-6">
                      <label>Password</label>
                      <div class="input-group-append">
                        <input  type="password" class="form-control p_input" id="password" name="password" >
                        <span class="input-group-text" >
                        <i class="far fa-eye" id="show-password" type="button" ></i>
                      </span>
                    </div>
                  </div>
                    <div id="password-strength"></div>
                    </div>
                      <span class="invalid-feedback" role="alert">
                        <strong></strong>
                      </span>
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
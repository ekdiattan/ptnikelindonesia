@extends('pages/main')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
         <form action="/tambahbookings" method="post" enctype="multipart/form-data">
          <p class="card-description">Peminjaman Kendaraan</p>
                  @csrf
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Kendaraan</label>
                        <select class="form-control" id="nama_merk" name="nama_merk"> 
                          @foreach($tampildata as $pilihan)
                            <option>{{$pilihan->nama_merk}}</option>    
                          @endforeach    
                        </select>                  
                      </div>
                    <div class="col-sm-6">
                      <label>Nama Driver</label>
                      <select class="form-control" id="nama_driver" name="nama_driver">
                        @foreach($driver as $driver) 
                          <option>{{$driver->nama_pegawai}}</option>    
                        @endforeach    
                        </select> 
                      <div id="username-message"></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Asal Region</label>
                     <select class="form-control" id="nama_region" name="nama_region">
                        @foreach($region as $region) 
                          <option>{{$region->nama_region}}</option>    
                        @endforeach    
                        </select>    
                    </div>
                    <div class="col-sm-6">
                      <label>Tujuan</label>
                      <input type="text" class="form-control" id="tujuan_blok" name="tujuan_blok">    
                    </div>
                    <div class="col-sm-6">
                      <label>Tanggal Awal Peminjaman</label>
                      <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">    
                    </div>
                    <div class="col-sm-6">
                      <label>Tanggal Akhir Peminjaman</label>
                      <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">    
                    </div>
                    <div class="col-sm-6">
                      <label>Jumlah Bensin</label>
                      <input type="text" class="form-control" id="jumlah_bensin_awal" name="jumlah_bensin_awal">    
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
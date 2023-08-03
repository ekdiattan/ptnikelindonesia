@extends('pages/main')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
         <form action="/editbookings/{{ $booking->id }}" method="post" enctype="multipart/form-data">
          <p class="card-description">Peminjaman Kendaraan</p>
                  @csrf
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Nama Kendaraan</label>
                      <input type="text" class="form-control" id="nama" name="nama_merk" value="{{ $booking->nama_merk }}" readonly>                      
                      </div>
                    <div class="col-sm-6">
                      <label>Nama Driver</label>
                      <input  type="text" class="form-control" id="username" name="nama_driver" value="{{ $booking->nama_driver }}" readonly>
                      <div id="username-message"></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Asal Region</label>
                      <input type="text" class="form-control" id="nama_region" name="nama_region" value="{{ $booking->nama_region }}" readonly>    
                    </div>
                    <div class="col-sm-6">
                      <label>Tujuan</label>
                      <input type="text" class="form-control" id="tujuan_blok" name="tujuan_blok" value="{{ $booking->tujuan_blok }}" readonly>    
                    </div>
                    <div class="col-sm-6">
                      <label>Tanggal Awal Peminjaman</label>
                      <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" value="{{ $booking->tanggal_awal }}" readonly>    
                    </div>
                    <div class="col-sm-6">
                      <label>Tanggal Akhir Peminjaman</label>
                      <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="{{ $booking->tanggal_akhir }}" readonly>    
                    </div>
                    <div class="col-sm-6">
                      <label>Jumlah Bensin</label>
                      <input type="text" class="form-control" id="jumlah_bensin_awal" name="jumlah_bensin_awal" value="{{ $booking->jumlah_bensin_awal }}" readonly>    
                    </div>
                    <!-- <div class="col-sm-6">
                      <label>Nama Penyetuju</label>
                      <input type="text" class="form-control" id="nama_penyetuju" name="nama_penyetuju" value="{{ $booking->nama_penyetuju }}" readonly>   
                    </div> -->
                    <div class="col-sm-6">
                      <label>Status</label>
                      <select class="form-control" id="status_pemesanan" name="status_pemesanan"> 
                          <option>PILIH</option>   
                          @if(Auth::user()->hak_akses=='Penyetuju') 
                          <option>Disetujui</option>
                          @endif
                          @if(Auth::user()->hak_akses=='Admin')    
                          <option>Selesai</option> 
                          @endif   
                        </select>     
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
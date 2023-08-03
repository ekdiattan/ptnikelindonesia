<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\Region;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    public function index(){
        $pengajuan = Booking::all();
        $pengajuan = Booking::where('status_pemesanan', 'Dalam Pengajuan')->get();
        return view('/booking/index',['pengajuan'=> $pengajuan, 'title' => 'Booking | PT Nikel Indonesia']);
    }
    public function indexsetuju(){
        $pengajuan = Booking::all();
        $pengajuan = Booking::where('status_pemesanan', 'Disetujui')->get();
        return view('/booking/disetujui',['pengajuan'=> $pengajuan, 'title' => 'Booking | PT Nikel Indonesia']);
    }
    public function indexselesai(){
        $pengajuan = Booking::all();
        $pengajuan = Booking::where('status_pemesanan', 'Selesai')->get();
        return view('/booking/selesai',['pengajuan'=> $pengajuan, 'title' => 'Booking | PT Nikel Indonesia']);
    }
    public function create(){
        $tampildata = Kendaraan::all();
        $region = Region::all();
        $driver = Pegawai::where('jabatan', 'Driver')->get();
        return view('/booking/create',['driver'=> $driver, 'region'=>$region, 'tampildata'=> $tampildata, 'title' => 'Booking | PT Nikel Indonesia']);
    }
    public function riwayatkendaraan(){
        $tampildata=Booking::all();
        $totals = array();
        foreach ($tampildata as $booking) {
            $totals[] = $booking->jumlah_bensin_awal - $booking->jumlah_bensin_akhir;
            }
        $total = array_shift($totals);
        // $bensin = Booking::where('jumlah_bensin_awal', 'Selesai')->count();
        return view('/booking/riwayatkendaraan',['total'=> $total, 'tampildata'=>$tampildata, 'title' => 'Booking | PT Nikel Indonesia']);
        
    }
    public function store(Request $request){
        $validatedDate = $request->validate([
            'nama_merk' => 'required|string',
            'nama_driver' => 'required|string',
            'nama_region' => 'required|string',
            'tujuan_blok' => 'required|string',
            'tanggal_awal' => 'required|string',
            'tanggal_akhir' => 'required|string',
            'jumlah_bensin_awal' => 'required|string',
        ]);
        Booking::create([
            'nama_merk' => $request->nama_merk,
            'nama_driver' => $request->nama_driver,
            'nama_region' => $request->nama_region,
            'tujuan_blok' => $request->tujuan_blok,
            'tanggal_awal' => $request->tanggal_awal,
            'tanggal_akhir' => $request->tanggal_akhir,
            'jumlah_bensin_awal' => $request->jumlah_bensin_awal,
            'status_pemesanan' => 'Dalam Pengajuan',
        ]);
        return redirect('/booking');
    }
    public function edit($id){
        $booking = Booking::find($id); 
        $penyetuju = Pegawai::where('jabatan', 'Pimpinan')->get();
        return view('/booking/update',['penyetuju'=> $penyetuju, 'booking' => $booking, 'title' => 'Blok | PT Nikel Indonesia']);
    }
    public function editselesai($id){
        $booking = Booking::find($id); 
        return view('/booking/updateselesai',['booking' => $booking, 'title' => 'Blok | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){
        $user = Auth::user();
        $nama_penyetuju = $user->nama;
        $update=Booking::find($id);
        $update->update([
            'status_pemesanan' => $request->status_pemesanan,
            'nama_penyetuju' => $nama_penyetuju,
        ]);
        return redirect('/booking');
    }
    public function updatesetujui(Request $request, $id){
        
        $update=Booking::find($id);
        $update->update([
            'status_pemesanan' => $request->status_pemesanan,
        ]);
        return redirect('/booking');
    }
}

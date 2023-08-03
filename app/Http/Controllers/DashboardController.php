<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;



class DashboardController extends Controller
{
    public function index(){

        $jumlahdata = Booking::count();
        $pengajuan = Booking::where('status_pemesanan', 'Dalam Pengajuan')->count();
        $disetujui = Booking::where('status_pemesanan', 'Disetujui')->count();
        $selesai = Booking::where('status_pemesanan', 'Selesai')->count();
        return view('/pages/dashboard',['selesai'=> $selesai, 'disetujui'=> $disetujui, 'pengajuan'=> $pengajuan,'jumlahdata'=> $jumlahdata, 'title' => 'Dashboard | PT Nikel Indonesia']);
    }

}

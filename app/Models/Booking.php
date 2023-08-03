<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'nama_merk',
        'nama_driver',
        'nama_region',
        'tujuan_blok',
        'nama_penyetuju',
        'jumlah_bensin_awal',
        'jumlah_bensin_akhir',
        'tanggal_awal',
        'tanggal_akhir',
        'status_pemesanan',
    ];
}

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\BlokController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome',['title' => 'Welcome | PT Nikel Indonesia']);
});
// Dashboard controller
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// User controller
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');;
Route::get('/pengguna', [UserController::class, 'show'])->middleware('auth');;
Route::get('/tambahpengguna', [UserController::class, 'create'])->middleware('auth');;
Route::get('/deletepengguna/{id}', [UserController::class, 'delete'])->middleware('auth');;
Route::get('/editpengguna/{id}', [UserController::class, 'edit'])->middleware('auth');;
Route::post('/tambahpenggunas', [UserController::class, 'store']);
Route::post('/editpenggunas/{id}', [UserController::class, 'update']);
// Booking Controller
Route::get('/booking', [BookingController::class, 'index'])->middleware('auth');
Route::get('/tambahbooking', [BookingController::class, 'create'])->middleware('auth');
Route::get('/editbooking/{id}', [BookingController::class, 'edit'])->middleware('auth');
Route::get('/bookingdone/{id}', [BookingController::class, 'editselesai'])->middleware('auth');
Route::get('/bookingdipinjam', [BookingController::class, 'indexsetuju'])->middleware('auth');
Route::get('/bookingselesai', [BookingController::class, 'indexselesai'])->middleware('auth');
Route::get('/riwayatkendaraan', [BookingController::class, 'riwayatkendaraan'])->middleware('auth');
Route::post('/tambahbookings', [BookingController::class, 'store']);
Route::post('/editbookings/{id}', [BookingController::class, 'update']);
// Blok Controller
Route::get('/blok', [BlokController::class, 'index'])->middleware('auth');
Route::get('/tambahblok', [BlokController::class, 'create'])->middleware('auth');
Route::get('/deleteblok/{id}', [BlokController::class, 'delete'])->middleware('auth');
Route::get('/editblok/{id}', [BlokController::class, 'edit'])->middleware('auth');
Route::post('/tambahbloks', [BlokController::class, 'store']);
Route::post('/editbloks/{id}', [BlokController::class, 'update']);
// Kendaraan Controller
Route::get('/kendaraan', [KendaraanController::class, 'index'])->middleware('auth');
Route::get('/tambahkendaraan', [KendaraanController::class, 'create'])->middleware('auth');
Route::get('/editkendaraan/{id}', [KendaraanController::class, 'edit']);
Route::post('/tambahkendaraans', [KendaraanController::class, 'store']);
Route::post('/editkendaraans/{id}', [KendaraanController::class, 'update']);
Route::get('/deletekendaraan/{id}', [KendaraanController::class, 'delete'])->middleware('auth');
// Region Controller
Route::get('/region', [RegionController::class, 'index'])->middleware('auth');
Route::get('/tambahregion', [RegionController::class, 'create'])->middleware('auth');
Route::get('/editregion/{id}', [RegionController::class, 'edit'])->middleware('auth');
Route::get('/deleteregion/{id}', [RegionController::class, 'delete'])->middleware('auth');
Route::post('/editregions/{id}', [RegionController::class, 'update']);
Route::post('/tambahregions', [RegionController::class, 'store']);
// Driver Controller
Route::get('/pegawai', [PegawaiController::class, 'index'])->middleware('auth');
Route::get('/tambahpegawai', [PegawaiController::class, 'create'])->middleware('auth');
Route::get('/editpegawai/{id}', [PegawaiController::class, 'edit'])->middleware('auth');
Route::get('/deletepegawai/{id}', [PegawaiController::class, 'delete'])->middleware('auth');
Route::post('/tambahpegawais', [PegawaiController::class, 'store']);
Route::post('/editpegawais/{id}', [PegawaiController::class, 'update']);



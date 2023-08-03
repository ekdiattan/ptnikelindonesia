<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_merk')->nullable();
            $table->string('nama_driver')->nullable();
            $table->string('nama_region')->nullable();
            $table->string('tujuan_blok')->nullable();
            $table->string('nama_penyetuju')->nullable();
            $table->string('jumlah_bensin_awal')->nullable();
            $table->string('jumlah_bensin_akhir')->nullable();
            $table->string('tanggal_awal')->nullable();
            $table->string('tanggal_akhir')->nullable();
            $table->string('status_pemesanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

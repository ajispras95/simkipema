<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RekapPrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Rekap_Prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_peserta');
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->string('Juara');
            $table->string('nama_lomba')
            $table->timestamp('tanggal_kegiatan');
            $table->string('angkatan');
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
        Schema::dropIfExists('Rekap_Prestasi');
    }
}

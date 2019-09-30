<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DokumentasiEksternal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Dokumentasi_Eksternal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->increments('Juara');
            $table->timestamps('Tanggal_Kegiatan');
            $table->string('Angkatan');
            $table->string('Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dokumentasi_Eksternal');
    }
}

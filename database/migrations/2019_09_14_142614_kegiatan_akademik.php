<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KegiatanAkademik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kegiatan_akademik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->string('kategori');
            $table->timestamp('tanggal');
            $table->string('tempat');
            $table->boolean('status');
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
        Schema::dropIfExists('kegiatan_akademik');
    }
}
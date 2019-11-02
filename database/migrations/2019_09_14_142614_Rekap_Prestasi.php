<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class prestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rekap_prestasi', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->string('juara');
            $table->string('nama_lomba');
            $table->timestamp('tanggal_kegiatan');
            $table->string('angkatan');
            $table->timestamps();
        });

        Schema::table('rekap_prestasi', function (Blueprint $table){
            $table->unsignedInteger('nama_organisasi');
            $table->foreign('nama_organisasi')->references('id')->on('confirms');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_prestasi');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class dokumentasiinternal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dokumentasi_internal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->increments('Juara');
            $table->timestamps('Tanggal_Kegiatan');
            $table->string('Angkatan');
            $table->string('Status');
        });

        Schema::table('dokumentasi_internal', function (Blueprint $table){
            $table->unsignedInteger('nama_kegiatan');
            $table->foreign('nama_kegiatan')->references('id')->on('confirms');
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
        Schema::dropIfExists('dokumentasi_internal');
    }
}

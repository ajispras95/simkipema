<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class dokumentasieksternal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dokumentasi_eksternal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_organisasi');
            $table->string('nama_kegiatan');
            $table->increments('juara');
            $table->timestamps('tanggal_kegiatan');
            $table->string('angkatan');
            $table->string('status');
        });

        Schema::table('dokumentasi_eksternal', function (Blueprint $table){
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
        Schema::dropIfExists('dokumentasi_eksternal');
    }
}


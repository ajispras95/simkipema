<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class laporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_organisasi');
            $table->timestamp('tanggal_kegiatan');
            $table->string('periode');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('laporanK', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_organisasi');
            $table->timestamp('tanggal_kegiatan');
            $table->string('periode');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('laporanD', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_organisasi');
            $table->timestamp('tanggal_kegiatan');
            $table->string('periode');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('laporanU', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_organisasi');
            $table->timestamp('tanggal_kegiatan');
            $table->string('periode');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('laporanH', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_organisasi');
            $table->timestamp('tanggal_kegiatan');
            $table->string('periode');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('laporan', function (Blueprint $table){
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
        Schema::dropIfExists('laporan');
        Schema::dropIfExists('laporanK');
        Schema::dropIfExists('laporanU');
        Schema::dropIfExists('laporanD');
        Schema::dropIfExists('laporanC');
        Schema::dropIfExists('laporanH');
    }
}

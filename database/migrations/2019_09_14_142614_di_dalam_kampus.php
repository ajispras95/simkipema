<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class didalamkampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::disableForeignKeyConstraints();
        Schema::create('di_dalam_kampus','di_dalam_kampusK', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nama_kegiatan');
            $table->string('program_kerja_divisi');
            $table->string('predikat');
            $table->date('waktu_pelaksanaan');
            $table->string('tempat');
            $table->string('tingkat');
            $table->string('scan_bukti');
            $table->timestamps();
        });

        Schema::table('di_dalam_kampus', function (Blueprint $table){
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
        Schema::dropIfExists('di_dalam_kampus');
        Schema::dropIfExists('di_dalam_kampusK');
    }
}

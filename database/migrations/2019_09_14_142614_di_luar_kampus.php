<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class diluarkampus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('di_luar_kampus', function (Blueprint $table) {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('di_luar_kampus');
    }
}

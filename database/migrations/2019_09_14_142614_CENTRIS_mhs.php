<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CENTRISmhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('CENTRIS_mhs', function (Blueprint $table) {
            $table->increments('id');
            
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
        Schema::dropIfExists('CENTRIS_mhs');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('alamat');
            $table->string('telp');
            $table->string('audience');
            $table->integer('total_audience');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_exp');
            $table->text('detail_event');
            $table->string('category');
            $table->text('file_poto');
            $table->text('file_proposal');
            $table->integer('budget');
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table){
            $table->unsignedInteger('confirm_id');
            $table->foreign('confirm_id')->references('id')->on('confirms');
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
        Schema::dropIfExists('events');
    }
}

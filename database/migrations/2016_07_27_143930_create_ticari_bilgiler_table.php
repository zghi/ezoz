<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicariBilgilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticari_bilgiler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tic_sicil_no');
            $table->integer('tic_oda_id')->unsigned();
            $table->foreign('tic_oda_id')->references('id')->on('ticaret_odalari')->onDelete('cascade');
            $table->integer('ust_sektor_id')->unsigned();
            $table->foreign('ust_sektor_id')->references('id')->on('sektorler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ticari_bilgiler');
    }
}

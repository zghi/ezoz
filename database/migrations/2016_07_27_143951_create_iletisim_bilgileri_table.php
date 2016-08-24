<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIletisimBilgileriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisim_bilgileri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adres_id')->unsigned();
            $table->foreign('adres_id')->references('id')->on('adresler')->onDelete('cascade');
            $table->string('telefon');
            $table->string('fax');
            $table->string('web_sayfasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iletisim_bilgileri');
    }
}

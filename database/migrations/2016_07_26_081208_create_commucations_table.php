<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommucationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //
         Schema::create('commucations', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('city_id')->default(0);
            $table->integer('district_id')->default(0);
            $table->integer('neighborhood_id')->default(0);
            $table->string('adres')->default('');
            $table->string('telefon')->default('');
            $table->string('fax')->default('');
           $table->string('web_sayfası')->default('');
            $table->string('slug')->default('');
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
        //
        Schema::drop('commucations');
    }
}

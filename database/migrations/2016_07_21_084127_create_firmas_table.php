<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('firmas', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('city_id')->default(0);
            $table->integer('district_id')->default(0);
            $table->integer('neigborhood_id')->default(0);
            $table->string('firma_adi')->default('');
            $table->string('firma_sektoru')->default('');
            $table->string('telefon')->default('');
            $table->string('image')->default('');
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
          Schema::drop('firmas');
    }
}


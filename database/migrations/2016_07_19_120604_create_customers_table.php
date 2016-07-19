<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('customers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('adi')->default('');
            $table->string('soyadi')->default('');
            $table->string('email')->default('');
            $table->string('unvan')->default('');
            $table->string('telefon')->default('');

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
        Schema::drop('customers');
    }
}

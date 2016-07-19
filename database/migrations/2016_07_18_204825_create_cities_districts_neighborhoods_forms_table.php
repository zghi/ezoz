<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesDistrictsNeighborhoodsFormsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('cities', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->timestamps();
        });

        Schema::create('districts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned()->default(0);
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->timestamps();
        });
        Schema::create('neighborhoods', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('district_id')->unsigned()->default(0);
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->timestamps();
        });
        Schema::create('forms', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->default(0);
            $table->integer('district_id')->default(0);
            $table->integer('neigborhood_id')->default(0);
            $table->string('name')->default('');
            $table->string('surname')->default('');
            $table->string('slug')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('cities');
        Schema::drop('districts');
        Schema::drop('neighborhoods');
        Schema::drop('forms');
    }

}

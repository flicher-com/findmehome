<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->string('room_type');
            $table->integer('no_bedrooms');
            $table->integer('no_bathrooms');

            $table->string('area');
            $table->string('area_unit');

            $table->bigInteger('rent');
            $table->bigInteger('deposit');

            $table->integer('min_term');

            $table->date('available_from');

            $table->boolean('ac');
            $table->boolean('cooler');
            $table->boolean('storage');

            $table->boolean('multi_room');
            $table->boolean('published');

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
        Schema::drop('hrooms');
    }
}

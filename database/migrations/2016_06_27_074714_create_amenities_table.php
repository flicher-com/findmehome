<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->boolean('internet');
            $table->boolean('water');
            $table->boolean('heat');
            $table->boolean('electricity');

            $table->boolean('ac');
            $table->boolean('tv');
            $table->boolean('garden');
            $table->boolean('terrace');
            $table->boolean('fridge');
            $table->boolean('oven');
            $table->boolean('dishwasher');
            $table->boolean('microwave');
            $table->boolean('washing');
            $table->boolean('dryer');
            $table->boolean('storage');
            $table->boolean('parking');
            $table->boolean('s_pool');
            $table->boolean('e_backup');
            $table->boolean('alarm');

            $table->boolean('water_storage');
            $table->boolean('waste_disposal');
            $table->boolean('atm');
            $table->boolean('elevator');
            $table->boolean('conference_room');
            $table->boolean('security_fire_alarm');

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
        Schema::drop('amenities');
    }
}

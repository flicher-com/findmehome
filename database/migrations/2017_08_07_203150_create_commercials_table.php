<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->string('type');

            $table->integer('total_area');
            $table->string('total_area_unit');

            $table->integer('build_up_area');
            $table->string('build_up_area_unit');

            $table->integer('min_term');

            $table->string('year_build');
            $table->string('year_renovated');

            $table->string('construction_status');

            $table->bigInteger('rent');
            $table->bigInteger('deposit');

            $table->integer('multi_properties')->default(0);

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
        Schema::drop('commercials');
    }
}

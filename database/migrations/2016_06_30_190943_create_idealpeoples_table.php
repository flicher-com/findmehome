<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdealpeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idealpeoples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->boolean('men');
            $table->boolean('women');
            $table->boolean('student');
            $table->boolean('seniors');
            $table->boolean('professionals');
            $table->boolean('family');
            $table->boolean('couples');
            $table->boolean('bachelors');

            $table->integer('min_age');
            $table->integer('max_age');

            $table->boolean('first_time')->default(1);

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
        Schema::drop('idealpeoples');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePgRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pg_id')->unsigned();
            $table->foreign('pg_id')->references('id')->on('pgs');

            $table->integer('no_rooms');
            $table->integer('no_beds');
            $table->integer('area');
            $table->string('area_unit');
            $table->integer('rent');
            $table->integer('deposit');
            $table->integer('ensuite');

            $table->boolean('ac');
            $table->boolean('cooler');
            $table->boolean('storage');

            $table->string('furnishing');

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
        Schema::drop('pg_rooms');
    }
}

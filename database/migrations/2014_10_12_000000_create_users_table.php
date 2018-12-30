<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('phone_no')->unique()->nullable();
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->text('description')->nullable();
            $table->string('status');
            $table->string('activity');
            $table->string('languages');
            $table->boolean('smoker');
            $table->boolean('veg');
            $table->boolean('pets');
            $table->boolean('relationship');
            $table->integer('strength');
            $table->string('avatar')->default('assets/images/default-user.png');
            $table->boolean('email_verified');
            $table->string('email_token');
            $table->boolean('phone_verified');
            $table->integer('phone_token');
            $table->boolean('private_no');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

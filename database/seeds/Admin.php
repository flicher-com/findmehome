<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Admin;
        $admin->name = "Admin";
        $admin->email = "m.varunverma@gmail.com";
        $admin->job_title = "admin";
        $admin->password = Hash::make('vermavarun');
        $admin->save();
    }
}

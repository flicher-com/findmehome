<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User::class);
        $this->call(Admin::class);
        $this->call(UserLanguage::class);
        $this->call(CountrySeeder::class);
    }
}

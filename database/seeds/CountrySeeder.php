<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'country_name' => 'India',
                'country_shortcode' => 'in',
                'country_currency' => '&#8377',
                'is_active' => 1,
            ],
            [
                'country_name' => 'Canada',
                'country_shortcode' => 'ca',
                'country_currency' => '&#36',
                'is_active' => 1,
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$user = new App\User;
        $user->first_name = 'Varun';
        $user->last_name = 'Varun';
        $user->email = 'm.varunverma@gmail.com';
        $user->password = Hash::make('vermavarun');
        $user->save();*/

        DB::table('users')->insert([
            [
                'first_name' => 'Sham',
                'last_name' => 'Baldev',
                'email' => 'baldev@vflicher.com',
                'password' => Hash::make('vermavarun'),
                'phone_no' => '9876543210',
                'phone_verified' => 1,
            ],
            [
                'first_name' => 'Ravi',
                'last_name' => 'Sharma',
                'email' => 'ravi@vflicher.com',
                'password' => Hash::make('vermavarun'),
                'phone_no' => '9776543210',
                'phone_verified' => 1,
            ],
            [
                'first_name' => 'Preet',
                'last_name' => 'Kaur',
                'email' => 'preet@vflicher.com',
                'password' => Hash::make('vermavarun'),
                'phone_no' => '9676543210',
                'phone_verified' => 1,
            ],
            [
                'first_name' => 'Ashu',
                'last_name' => 'Verma',
                'email' => 'ashu@vflicher.com',
                'password' => Hash::make('vermavarun'),
                'phone_no' => '9576543210',
                'phone_verified' => 1,
            ],
            [
                'first_name' => 'Akhil',
                'last_name' => 'Gupta',
                'email' => 'akhil@vflicher.com',
                'password' => Hash::make('vermavarun'),
                'phone_no' => '9376543210',
                'phone_verified' => 1,
            ],

        ]);

    }
}

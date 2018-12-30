<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLanguage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_languages')->insert([

            [
                'language' => '汉语',
            ],
            [
                'language' => 'Español',
            ],
            [
                'language' => 'English',
            ],
            [
                'language' => 'العربية',
            ],
            [
                'language' => 'हिन्दी',
            ],
            [
                'language' => 'Português',
            ],
            [
                'language' => 'русский',
            ],
            [
                'language' => 'Deutsch',
            ],
            [
                'language' => '한국의',
            ],
            [
                'language' => 'Français',
            ],
            [
                'language' => 'Tiếng việt',
            ],
            [
                'language' => 'Polski',
            ],
            [
                'language' => 'українська мова',
            ],
            [
                'language' => 'Română',
            ],
            [
                'language' => 'Norsk',
            ],
            [
                'language' => 'Svenska',
            ],
            [
                'language' => 'Italiano',
            ],
            [
                'language' => 'ελληνικά',
            ],
            [
                'language' => 'српски',
            ],
            [
                'language' => 'Nederlands',
            ],
            [
                'language' => '日本語',
            ],
            [
                'language' => 'Català',
            ],
        ]);
    }
}

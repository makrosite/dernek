<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SosyalMedyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               \DB::table('sosyal_medyas')->insert([
        [
            'baslik' => 'Facebook',
            'logo' => 'https://icons.iconarchive.com/icons/danleech/simple/128/facebook-icon.png',
            'durum' =>1,
            'link'=> '#',
            'updated_at' => now()
        ],
               [
            'baslik' => 'x',
            'logo' => 'https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg',
            'durum' =>1,
            'link'=> '#',
            'updated_at' => now()
               ],
                      [
            'baslik' => 'Instagram',
            'logo' => 'https://w7.pngwing.com/pngs/398/444/png-transparent-instagram-thumbnail.png',
            'durum' =>1,
            'link'=> '#',
            'updated_at' => now()
        ]




    ]);
    }
}

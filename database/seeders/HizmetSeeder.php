<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HizmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('hizmets')->insert([
        [
            'menu' => 'Hizmet-1',
            'baslik' => '1. hizmetin başlıgı',
            'resim' =>"ornek.jpg",
            'metin'=>"1. hizmetin açıklaması",
            "durum"=> 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],

           [ 'menu' => 'Hizmet-2',
            'baslik' => '2. hizmetin başlıgı',
            'resim' =>"ornek.jpg",
            'metin'=>"2. hizmetin açıklaması",
            "durum"=> 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],


        [
            'menu' => 'Hizmet-3',
            'baslik' => '3. hizmetin başlıgı',
            'resim' =>"ornek.jpg",
            'metin'=>"3. hizmetin açıklaması",
            "durum"=> 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]




    ]);
    }
}

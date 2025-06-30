<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YonetimKuruluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         \DB::table('yonetim_kurulu')->insert([
        [
            'adsoyad' => 'İbrahim GÜNEŞ',
            'statu' =>'Üye',
            "resim"=>"ornek.jpg",
            'created_at' => now(),

        ],
          [
            'adsoyad' => 'Ahmet Yılmaz',
            'statu' =>'Başkan Yardımcısı',
            "resim"=>"ornek.jpg",
            'created_at' => now(),

        ],
          [
            'adsoyad' => 'Mehmet TEKİN',
            'statu' =>'Üye',
            "resim"=>"ornek.jpg",
            'created_at' => now(),

        ],


    ]);

    }
}

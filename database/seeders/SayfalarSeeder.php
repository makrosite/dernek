<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SayfalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        \DB::table('sayfalar')->insert([
            [
                'sayfa_adi' => 'Hakkımızda',
                'baslik' => 'Derneğimiz Hakkında',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'metin' => 'sadjlskjsdfgdsknvfdhgkdjhlkjdhkbjgldtr',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'sayfa_adi' => 'Tarihçe',
                'baslik' => 'Derneğimizin Tarihçesi',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'metin' => 'tarihçe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                    [
                'sayfa_adi' => 'Tüzük',
                'baslik' => 'Derneğimizin Tarihçesi',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'metin' => 'tüzük metini',
                'created_at' => now(),
                'updated_at' => now(),
                    ]

        ]);
    }
}

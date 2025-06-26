<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsbirlikleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    \DB::table('isbirlikleri')->insert([
        [
            'unvan' => 'Ortak Kuruluş A',
            'metin' => 'Ortak Kuruluş A ile yapılan işbirliği detayları burada yer alır.',
            'resim' => 'https://www.egesiad.com/imgs/250x80x2/yerli-uretim-logo-dernek.png',
            'durum' => 1,
        ],
        [
            'unvan' => 'Ortak Kuruluş B',
            'metin' => 'Ortak Kuruluş B ile yapılan işbirliği detayları burada yer alır.',
            'resim' => 'https://www.egesiad.com/imgs/250x80x2/yerli-uretim-logo-dernek.png',
            'durum' => 1,
        ],
        [
            'unvan' => 'Ortak Kuruluş C',
            'metin' => 'Ortak Kuruluş C ile yapılan işbirliği detayları burada yer alır.',
            'resim' => 'https://www.egesiad.com/imgs/250x80x2/yerli-uretim-logo-dernek.png',
            'durum' => 0,
        ],
        [
            'unvan' => 'Ortak Kuruluş D',
            'metin' => 'Ortak Kuruluş D ile yapılan işbirliği detayları burada yer alır.',
            'resim' => 'https://www.egesiad.com/imgs/250x80x2/yerli-uretim-logo-dernek.png',
            'durum' => 1,
        ],
    ]);


    }
}

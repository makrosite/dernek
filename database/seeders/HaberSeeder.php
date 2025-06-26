<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('habers')->insert([
            [
                'baslik' => 'Birinci Haber Başlığı',
                'metin' => 'Birinci haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 1,
                'yazar' => 1,
                'okunma' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'baslik' => 'İkinci Haber Başlığı',
                'metin' => 'İkinci haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 2,
                'yazar' => 2,
                'okunma' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'baslik' => 'Üçüncü Haber Başlığı',
                'metin' => 'Üçüncü haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 1,
                'yazar' => 1,
                'okunma' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'baslik' => 'Dördüncü Haber Başlığı',
                'metin' => 'Dördüncü haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 3,
                'yazar' => 3,
                'okunma' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'baslik' => 'Beşinci Haber Başlığı',
                'metin' => 'Beşinci haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 2,
                'yazar' => 2,
                'okunma' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'baslik' => 'Altıncı Haber Başlığı',
                'metin' => 'Altıncı haberin içeriği burada yer alıyor.',
                'resim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'durum' => 1,
                'kategori' => 1,
                'yazar' => 1,
                'okunma' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

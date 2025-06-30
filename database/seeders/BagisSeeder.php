<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('bagis')->insert([
        [
            'adsoyad' => 'İbrahim GÜNEŞ',
            'aciklama' => 'derneğe  120 TL bağış yapıldı',
            'banka' =>1,
            'tutar'=>120,
            "durum"=> 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
          [
            'adsoyad' => 'MahmutGÜNEŞ',
            'aciklama' => 'derneğe 5000 TL bağış yapıldı',
            'banka' =>1,
            'tutar'=>5000,
            "durum"=> 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],

          [
            'adsoyad' => 'Ahmet GÜNEŞ',
            'aciklama' => 'derneğe  150 TL bağış yapıldı',
            'banka' =>1,
            'tutar'=>150,
            "durum"=> 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],



    ]);
    }
}

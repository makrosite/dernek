<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtkinliklerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \DB::table('etkinlikler')->insert([
        [
            'baslik' => 'Yeni Web Sitemiz Yayında!',
            'metin' => 'Kurumsal web sitemiz modern arayüzüyle yayına alınmıştır.',
            'resim' =>'ornek.jpg',
            'durum'=> '1',
            'tarih'=>now(),
            'created_at' => now(),

        ]


    ]);
    }
}

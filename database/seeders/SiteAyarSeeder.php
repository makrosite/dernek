<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteAyarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        \DB::table('site_ayar')->insert([
            [
                'sitebasligi' => 'EGESİAN EGE SANAYİCİ İŞ ADAMLARI DERNEĞİ',
                'aciklama' => 'Derneğimiz Hakkında',
                'logo' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'baslikresim' => 'https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg',
                'footer' => 'Copyright yazısı',
                'keyword'=> 'anahtaf kelime',
                'renk'=> '#0000',
                'bakim'=> '0',
                'created_at' => now(),
                'updated_at' => now()
            ]


        ]);
    }
}

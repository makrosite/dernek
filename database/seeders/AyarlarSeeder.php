<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AyarlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           \DB::table('ayarlar')->insert([
        [
            'baslik' => 'EGE SANAYİCİ İŞ ADAMLARI DERNEĞİ',
            'decs' => 'Ege Bölgesi sanayici iş adamları derneğinin resmi web sitesidir.',
            'keywords' =>'egesiad,ehesanayi,ege',
            'googleapi'=> 'googloe anahtar',
            'footer'=>"tüm hakkı saklıdır",
            "logo"=> "logo.png",
            'bc' => "bc.png",
            'footerlogo' => "footer.png",
            'bakimmodu' => 0,
            'renk' => "#FFFFF",
            'footerrenk'=> "#FFFFF",
            'updated_at' => now()
        ]


    ]);
    }
}

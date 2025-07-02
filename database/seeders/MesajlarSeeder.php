<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesajlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         \DB::table('mesajlar')->insert([
            [
                'adsoyad' => 'Kıymet kök',
                'telefon' =>'0555 555 55 55',
                'eposta'=> 'demo@demo.gmail.com',
                'sektor'=> 'Yazılım',
                'konu'=> 'bağış',
                'mesaj'=> 'Bağış yapmak istiyorum',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Ahmet Yılmaz',
                'telefon' =>'0532 111 22 33',
                'eposta'=> 'ahmetyilmaz@example.com',
                'sektor'=> 'Eğitim',
                'konu'=> 'Sponsorluk',
                'mesaj'=> 'Etkinliğiniz için sponsor olmak istiyorum.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Fatma Demir',
                'telefon' =>'0543 222 33 44',
                'eposta'=> 'fatmademir@example.com',
                'sektor'=> 'Sağlık',
                'konu'=> 'Gönüllülük',
                'mesaj'=> 'Gönüllü olarak projelerinizde yer almak istiyorum.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Mehmet Can',
                'telefon' =>'0505 333 44 55',
                'eposta'=> 'mehmetcan@example.com',
                'sektor'=> 'Finans',
                'konu'=> 'Bağış',
                'mesaj'=> 'Kurumsal olarak bağış yapmak istiyoruz.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Zeynep Kaya',
                'telefon' =>'0530 444 55 66',
                'eposta'=> 'zeynepkaya@example.com',
                'sektor'=> 'Turizm',
                'konu'=> 'İşbirliği',
                'mesaj'=> 'Birlikte bir sosyal sorumluluk projesi yapmak isteriz.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Ali Vural',
                'telefon' =>'0551 555 66 77',
                'eposta'=> 'alivural@example.com',
                'sektor'=> 'Tekstil',
                'konu'=> 'Bağış',
                'mesaj'=> 'Kıyafet bağışı yapmak istiyorum.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
            [
                'adsoyad' => 'Elif Şahin',
                'telefon' =>'0542 666 77 88',
                'eposta'=> 'elifsahin@example.com',
                'sektor'=> 'Gıda',
                'konu'=> 'Destek',
                'mesaj'=> 'Gıda desteği sağlamak istiyoruz.',
                'okundu'=> 0,
                'created_at' => now(),
            ],
        ]);
    }
}

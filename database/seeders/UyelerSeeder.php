<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UyelerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('uyelers')->insert([
            [
                'firmaunvan' => 'ABC İnşaat A.Ş.',
                'adsoyad' => 'Ali Vural',
                'telefon' => '5321112233',
                'eposta' => 'ali.vural@abcinsaat.com',
                'hakkinda' => 'ABC İnşaat, 1990 yılından beri sektörde faaliyet göstermektedir.',
                'resim' => 'abc-insaat.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firmaunvan' => 'XYZ Yazılım Ltd. Şti.',
                'adsoyad' => 'Zeynep Korkmaz',
                'telefon' => '5322223344',
                'eposta' => 'zeynep.korkmaz@xyzyazilim.com',
                'hakkinda' => 'XYZ Yazılım, yenilikçi yazılım çözümleri sunar.',
                'resim' => 'xyz-yazilim.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firmaunvan' => 'Mavi Denizcilik',
                'adsoyad' => 'Mehmet Deniz',
                'telefon' => '5323334455',
                'eposta' => 'mehmet.deniz@mavidenizcilik.com',
                'hakkinda' => 'Mavi Denizcilik, deniz taşımacılığında liderdir.',
                'resim' => 'mavi-denizcilik.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firmaunvan' => 'Güneş Enerji Sistemleri',
                'adsoyad' => 'Ayşe Güneş',
                'telefon' => '5324445566',
                'eposta' => 'ayse.gunes@gunesenerji.com',
                'hakkinda' => 'Güneş Enerji, yenilenebilir enerji alanında hizmet vermektedir.',
                'resim' => 'gunes-enerji.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firmaunvan' => 'Yeşil Tarım Ürünleri',
                'adsoyad' => 'Fatih Yeşil',
                'telefon' => '5325556677',
                'eposta' => 'fatih.yesil@yesiltarim.com',
                'hakkinda' => 'Yeşil Tarım, organik tarım ürünleri üreticisidir.',
                'resim' => 'yesil-tarim.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

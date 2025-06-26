<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\YonetimKuruluModel;

class YonetimKuruluModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        YonetimKuruluModel::insert([
            [
                'adsoyad' => 'Ahmet Yılmaz',
                'meslek' => 'Avukat',
                'telefon' => '5551112233',
                'eposta' => 'ahmet.yilmaz@example.com',
                'unvan' => 'Başkan',
                'hakkinda' => '20 yıllık tecrübesiyle yönetim kurulu başkanıdır.',
                'resim' => 'ahmet-yilmaz.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adsoyad' => 'Mehmet Demir',
                'meslek' => 'Mühendis',
                'telefon' => '5552223344',
                'eposta' => 'mehmet.demir@example.com',
                'unvan' => 'Başkan Yardımcısı',
                'hakkinda' => 'Yönetim kurulunda başkan yardımcısı olarak görev yapmaktadır.',
                'resim' => 'mehmet-demir.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adsoyad' => 'Ayşe Kaya',
                'meslek' => 'Doktor',
                'telefon' => '5553334455',
                'eposta' => 'ayse.kaya@example.com',
                'unvan' => 'Üye',
                'hakkinda' => 'Yönetim kurulunda üye olarak görev almaktadır.',
                'resim' => 'ayse-kaya.jpg',
                'durum' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

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
                'adi' => 'Ali',
                'soyadi' => 'Vural',
                'baba_adi' => 'Mehmet',
                'anne_adi' => 'Ayşe',
                'dogum_yeri' => 'İstanbul',
                'dogum_tarihi' => '1985-04-12',
                'tc_kimlik_no' => '12345678901',
                'meslegi' => 'İnşaat Mühendisi',
                'kan_grubu' => 'A+',
                'is_telefonu' => '2121234567',
                'ev_telefonu' => '2167654321',
                'cep_telefonu' => '5321112233',
                'eposta' => 'ali.vural@example.com',
                'nufusa_kayit_il_ilce_mahalle' => 'İstanbul/Kadıköy/Moda',
                'ikamet_adresi' => 'Kadıköy, Moda Cd. No:10 İstanbul',
                'is_adresi' => 'Levent, Büyükdere Cd. No:100 İstanbul',
                'ogrenim_durumu' => 'Lisans',
                'durum' => 1,
                'firmaunvanı' => 'ABC İnşaat A.Ş.',
                'resim' => 'ali-vural.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adi' => 'Zeynep',
                'soyadi' => 'Korkmaz',
                'baba_adi' => 'Ahmet',
                'anne_adi' => 'Fatma',
                'dogum_yeri' => 'Ankara',
                'dogum_tarihi' => '1990-08-25',
                'tc_kimlik_no' => '23456789012',
                'meslegi' => 'Yazılım Geliştirici',
                'kan_grubu' => 'B-',
                'is_telefonu' => '3121234567',
                'ev_telefonu' => '3127654321',
                'cep_telefonu' => '5322223344',
                'eposta' => 'zeynep.korkmaz@example.com',
                'nufusa_kayit_il_ilce_mahalle' => 'Ankara/Çankaya/Kızılay',
                'ikamet_adresi' => 'Çankaya, Atatürk Blv. No:20 Ankara',
                'is_adresi' => 'Teknopark, Bilim Sk. No:5 Ankara',
                'ogrenim_durumu' => 'Yüksek Lisans',
                'durum' => 1,
                'firmaunvanı' => 'XYZ Yazılım Ltd. Şti.',
                'resim' => 'zeynep-korkmaz.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adi' => 'Mehmet',
                'soyadi' => 'Deniz',
                'baba_adi' => 'Osman',
                'anne_adi' => 'Emine',
                'dogum_yeri' => 'İzmir',
                'dogum_tarihi' => '1978-12-03',
                'tc_kimlik_no' => '34567890123',
                'meslegi' => 'Kaptan',
                'kan_grubu' => '0+',
                'is_telefonu' => '2321234567',
                'ev_telefonu' => '2327654321',
                'cep_telefonu' => '5323334455',
                'eposta' => 'mehmet.deniz@example.com',
                'nufusa_kayit_il_ilce_mahalle' => 'İzmir/Konak/Alsancak',
                'ikamet_adresi' => 'Konak, Kordonboyu Cd. No:15 İzmir',
                'is_adresi' => 'Liman, Denizciler Sk. No:1 İzmir',
                'ogrenim_durumu' => 'Lise',
                'durum' => 1,
                'firmaunvanı' => 'Mavi Denizcilik',
                'resim' => 'mehmet-deniz.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

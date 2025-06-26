<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DuyuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \DB::table('duyurus')->insert([
        [
            'baslik' => 'Yeni Web Sitemiz Yayında!',
            'metin' => 'Kurumsal web sitemiz modern arayüzüyle yayına alınmıştır.',
            'resim' =>'https://www.egesiad.com/imgs/950x534x2/basin_1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'baslik' => 'Yaz Dönemi Kurs Kayıtları Başladı',
            'metin' => 'Yaz dönemi için kurs kayıtlarımız başlamıştır. Detaylar için iletişime geçebilirsiniz.',
            'resim' =>'https://www.egesiad.com/imgs/950x534x2/basin_1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'baslik' => 'Ofisimiz Taşındı',
            'metin' => 'Yeni adresimizde hizmet vermeye devam ediyoruz. Lütfen iletişim sayfamızı ziyaret edin.',
            'resim' => 'https://www.egesiad.com/imgs/950x534x2/basin_1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'baslik' => 'Bayram Tatili Duyurusu',
            'metin' => 'Ofisimiz bayram tatili boyunca kapalı olacaktır. Anlayışınız için teşekkür ederiz.',
            'resim' => 'uhttps://www.egesiad.com/imgs/950x534x2/basin_1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'baslik' => 'Online Eğitimlerimiz Başladı',
            'metin' => 'Uzaktan eğitimlerimiz online platformda başlamıştır. Katılım için kayıt olabilirsiniz.',
            'resim' => 'uhttps://www.egesiad.com/imgs/950x534x2/basin_1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}

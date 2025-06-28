<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaskaninMesajlariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('baskanin_mesajlaris')->insert([
            [
              'menu_adi'=> 'Başkanın Mesajları',
             'baslik'=> 'başkanımızdan Mesajlar',
                'mesaj' => 'Değerli üyelerimiz, derneğimizin gelişimi için gösterdiğiniz katkılardan dolayı teşekkür ederim. Birlikte daha güzel yarınlara ulaşacağımıza inanıyorum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

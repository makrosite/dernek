<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KurumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \DB::table('kurums')->insert([
        [
            'baslik' => 'Kosgeb',
            'resim' =>'ornek.png',
            'created_at' => now(),

        ]


    ]);
    }
}

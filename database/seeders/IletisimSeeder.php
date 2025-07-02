<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IletisimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('iletisims')->insert([
        [
            'telefon' => '0555 555 55 55',
            'gsm' => '0555 555 55 55',
            'eposta' =>"demo@demo.com",
            'wp'=> '0555 555 55 55',
            'wpbutton'=> '0555 555 55 55',
            'adres'=> 'merkez izmir',
            'maps'=> 'maps iframe kodu',
            'updated_at' => now()
        ]




    ]);
    }
}

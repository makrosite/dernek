<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('bankalar')->insert([
            [
                'bankaadi'=> 'akbanak',
                'iban'=> 'TR0000000000000000',
                'doviz_turu'=> 'TRY',
                'logo' => 'https://www.hepfirma.com/storage/akbank-genel-mudurluk-1651524609.png',
                'durum'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'bankaadi'=> 'Ziraat Bankası',
                'iban'=> 'TR0000000000000001',
                'doviz_turu'=> 'TRY',
                'logo' => 'https://tele1comtr.teimg.com/crop/1280x720/tele1-com-tr/uploads/2024/11/kapak-2-2024-11-15t193634463.jpg',
                'durum'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'bankaadi'=> 'Halkbank',
                'iban'=> 'TR0000000000000011',
                'doviz_turu'=> 'TRY',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Halkbank_logo.svg/2560px-Halkbank_logo.svg.png',
                'durum'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}

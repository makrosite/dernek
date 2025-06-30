<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TesvikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           \DB::table('tesviks')->insert([
        [
            'baslik' => '1.000.000 TL Hibe',
            'metin' =>'Sanayiciye makine alımında 100000 TL Koagebden hibe',
            "kurum"=>"1",
            "tur"=>"1",
            'created_at' => now(),

        ],
         [
            'baslik' => '100.00  TL Teşvik',
            'metin' =>'Sanayiciye destek',
            "kurum"=>"1",
            "tur"=>"2",
            'created_at' => now(),

        ]

    ]);
}
}

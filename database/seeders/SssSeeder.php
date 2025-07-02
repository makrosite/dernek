<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      \DB::table('sss')->insert([
        [
            'soru' => 'soru 1',
            'cevap' => 'cevap 1',
            'created_at'=> now(),
            'updated_at' => now()
        ],
         [
            'soru' => 'soru 2',
            'cevap' => 'cevap 2 ',
            'created_at'=> now(),
            'updated_at' => now()
         ],
          [
            'soru' => 'soru 3',
            'cevap' => 'cevap 3',
            'created_at'=> now(),
            'updated_at' => now()
          ],
           [
            'soru' => 'soru 4',
            'cevap' => 'cevap 4',
            'created_at'=> now(),
            'updated_at' => now()
        ]

    ]);

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->call(HaberSeeder::class);
            $this->call(UyelerSeeder::class);
            $this->call(BaskaninMesajlariSeeder::class);
            $this->call(HakkimizdaSeeder::class);

    }
}

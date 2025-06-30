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
            $this->call(DuyuruSeeder::class);
             $this->call(IsbirlikleriSeeder::class);
             $this->call(class: SayfalarSeeder::class);
             $this->call(class: SiteAyarSeeder::class);
             $this->call(class: EtkinliklerSeeder::class);
             $this->call(class: KurumSeeder::class);
              $this->call(class: TesvikSeeder::class);


    }
}

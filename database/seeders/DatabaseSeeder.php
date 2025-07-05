<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\YonetimKurulu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
           // $this->call(HaberSeeder::class);
         //   $this->call(UyelerSeeder::class);
            $this->call(BaskaninMesajlariSeeder::class);
        //    $this->call(HakkimizdaSeeder::class);
        //    $this->call(DuyuruSeeder::class);
         //    $this->call(IsbirlikleriSeeder::class);
         //    $this->call(class: SayfalarSeeder::class);
             $this->call(class: SiteAyarSeeder::class);
          //   $this->call(class: EtkinliklerSeeder::class);
           //  $this->call(class: KurumSeeder::class);
          //  $this->call(class: TesvikSeeder::class);
           // $this->call(class: YonetimKuruluSeeder::class);
           // $this->call(class: BagisSeeder::class);
           // $this->call(class: HizmetSeeder::class);
            $this->call(class: AyarlarSeeder::class);
            $this->call(class: SosyalMedyaSeeder::class);
            $this->call(class: IletisimSeeder::class);
            $this->call(class: SssSeeder::class);
            $this->call(class: BankalarSeeder::class);
          //   $this->call(class: MesajlarSeeder::class);

        \App\Models\User::firstOrCreate([
            'username' => 'admin',
        ], [
            'name' => 'Yönetici',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
        ]);

    }
}

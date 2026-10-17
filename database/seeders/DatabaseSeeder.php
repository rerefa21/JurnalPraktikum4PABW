<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Memanggil kelas Seeder spesifik:
        $this->call([
            LaporanSeeder::class,
            // UserSeeder::class, // seeder lainnya jika ada
        ]);

        // ATAU jika menggunakan Factory langsung untuk data dummy:
        // \App\Models\Laporan::factory(10)->create();
    }
}
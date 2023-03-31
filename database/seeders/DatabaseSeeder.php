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
        \App\Models\Invoice::factory(20)->create();

        \App\Models\Invoice::factory()->create([
            'numeroFacturas' => rand(1, 20),
            'importeTotal' => 1000 / rand(1, 1000),
            'fechaDesde' => '2023/03/'.rand(1, 15),
            'fechaHasta' => '2023/03/'.rand(15, 31),
        ]);
    }
}

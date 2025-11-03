<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pilar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            NivelSeeder::class,
            OrgaoSeeder::class,
            PilarSeeder::class,
            PerguntaSeeder::class,      
        ]);
    }
}

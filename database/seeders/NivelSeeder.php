<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    public function run(): void
    {
        $niveis = ['chefe', 'estagiario', 'terceirizado'];

        foreach ($niveis as $nivel) {
            Nivel::create(['nivel' => $nivel]);
        }
    }
}

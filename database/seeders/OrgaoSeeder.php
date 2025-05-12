<?php

namespace Database\Seeders;

use App\Models\Orgao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrgaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orgaos = [
            "Espaço do Servidor",
            "Prefeitura",
            "DETIN - Departamento de tecnologia",
            "Administração",
            "Diretoria",
            "PAV",
            "Dire"

        ];
        foreach ($orgaos as $orgao) {
            Orgao::create(['nome' => $orgao]);
        }
    }
}

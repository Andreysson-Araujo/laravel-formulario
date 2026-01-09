<?php

namespace Database\Seeders;

use App\Models\Central;
use Illuminate\Database\Seeder;

class CentralTableSeeder extends Seeder
{
    public function run(): void
    {
        $centrais = [
            ['nome' => 'Rio Branco', 'data_de_inauguracao' => '1990-01-01'],
            ['nome' => 'Xapuri', 'data_de_inauguracao' => '1995-05-10'],
            ['nome' => 'Cruzeiro do Sul', 'data_de_inauguracao' => '2000-08-15'],
            ['nome' => 'Brasileia', 'data_de_inauguracao' => '2010-12-20'],
            ['nome' => 'Oca Movel', 'data_de_inauguracao' => '2020-03-01'],
        ];

        foreach ($centrais as $central) {
            Central::create($central);
        }
    }
}

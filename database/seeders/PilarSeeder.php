<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PilarSeeder extends Seeder
{public function run(): void
    {
        $now = now();

        $rows = [];
        for ($i = 1; $i <= 6; $i++) {
            $rows[] = [
                'pilar_1' => 1,
                'pilar_2' => 1,
                'pilar_3' => 1,
                'pilar_4' => 1,
                'pilar_5' => 1,
                'pilar_6' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('pilares')->insert($rows);
    }
}
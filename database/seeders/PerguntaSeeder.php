<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $perguntas = [
            ['texto_pergunta' => 'Você pratica exercícios regularmente?', 'pilar_id' => 1],
            ['texto_pergunta' => 'Você tem dormido bem ultimamente?', 'pilar_id' => 2],
            ['texto_pergunta' => 'Você se sente conectado às pessoas ao seu redor?', 'pilar_id' => 3],
            ['texto_pergunta' => 'Você está satisfeito com sua carreira atual?', 'pilar_id' => 4],
            ['texto_pergunta' => 'Você tem controle sobre suas finanças?', 'pilar_id' => 5],
            ['texto_pergunta' => 'Você reserva tempo para reflexão ou espiritualidade?', 'pilar_id' => 6],
         ];

         foreach($perguntas as $pergunta) {
            Pergunta::create($pergunta);
         }
    }

}

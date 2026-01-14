<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resposta; // Importamos a Model Resposta, que é a que existe no banco
use App\Models\Pergunta;

class FormularioController extends Controller
{
    public function create(Request $request)
    {
        $servidor_id = $request->query('servidor_id');
        $perguntas = Pergunta::all();

        return view('formularios.create', compact('servidor_id', 'perguntas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'servidores_id' => 'required',
            'answers' => 'required|array',
            'classificate' => 'required',
        ]);

        try {
            // No seu diagrama, não existe tabela 'formularios'. 
            // Vamos salvar tudo na tabela 'respostas' em um loop.
            foreach ($request->answers as $pergunta_id => $valor_resposta) {
                Resposta::create([
                    'servidor_id'       => $request->servidores_id,
                    'pergunta_id'         => $pergunta_id,
                    'valor'               => $valor_resposta,
                    'classificacao_geral' => $request->classificate, // Nome da coluna no seu diagrama
                    'comentarios'         => $request->suggestions,   // Nome da coluna no seu diagrama
                ]);
            }

            return redirect()->route('servidores.index')->with('msg', 'Sucesso!');

        } catch (\Exception $e) {
            // Se der erro de nome de coluna, o DD vai te avisar exatamente qual é
            dd("Erro ao salvar: " . $e->getMessage());
        }
    }
}
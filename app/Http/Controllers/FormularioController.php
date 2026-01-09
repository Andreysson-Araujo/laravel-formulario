<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function create(Request $request)
    {
        $servidor_id = $request->query('servidor_id');
        // Busca todas as perguntas cadastradas
        $perguntas = \App\Models\Pergunta::all();

        return view('formularios.create', compact('servidor_id', 'perguntas'));
    }

    public function store(Request $request)
    {
        // 1. Validamos os campos gerais e o array de respostas
        $request->validate([
            'servidores_id' => 'required|exists:servidores,id',
            'answers' => 'required|array', // Recebe o array de respostas da View
            'classificate' => 'required|integer|min:0|max:10',
            'suggestions' => 'nullable|string|max:1000'
        ]);

        try {
            $data = [
                'servidores_id' => $request->servidores_id,
                'classificate'  => $request->classificate,
                'comments'      => $request->suggestions,
            ];

            // 2. Mapeamos as respostas do banco para as suas colunas fixas
            // Isso assume que o usuário respondeu na ordem
            foreach ($request->answers as $index => $valor) {
                $coluna = 'answer_' . ($index); // Cria o nome 'answer_1', 'answer_2'...
                $data[$coluna] = $valor;
            }

            Formulario::create($data);

            return redirect()->route('servidores.index')->with('msg', 'Resposta enviada!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Erro: ' . $e->getMessage()])->withInput();
        }
    }
}

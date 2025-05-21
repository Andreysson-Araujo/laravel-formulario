<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function create(Request $request)
    {
        $servidor_id = $request->query('servidor_id');
        return view('formularios.create', compact('servidor_id'));
    }

    public function store(Request $request)
    {
        // Validação com debug opcional
        $validated = $request->validate([
            'servidores_id' => 'required|exists:servidores,id',
            'answer_1' => 'required|integer',
            'answer_2' => 'required|integer',
            'answer_3' => 'required|integer',
            'answer_4' => 'required|integer',
            'answer_5' => 'required|integer',
            'answer_6' => 'required|string',
            'classificate' => 'required|integer|min:0|max:10',
            'suggestions' => 'nullable|string|max:1000'
        ]);

        // Inserção no banco
        Formulario::create([
            'servidores_id' => $validated['servidores_id'],
            'answer_1' => $validated['answer_1'],
            'answer_2' => $validated['answer_2'],
            'answer_3' => $validated['answer_3'],
            'answer_4' => $validated['answer_4'],
            'answer_5' => $validated['answer_5'],
            'answer_6' => $validated['answer_6'],
            'classificate' => $validated['classificate'],
            'comments' => $validated['suggestions']
        ]);

        return redirect()->route('servidores.index')->with('msg', 'Resposta enviada com sucesso!');
    }
}

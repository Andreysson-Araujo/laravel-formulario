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
        $request->validate([
            'servidores_id' => 'required|exists:servidores,id',
            'answer.*' => 'required|string',
            'classificate' => 'required|integer|min:1|max:10',
            'comments' => 'nullable|string|max:1000'
        ]);
    
        Formulario::create([
            'servidores_id' => $request->input('servidores_id'),
            'answer_1' => $request->input('answer')[0],
            'answer_2' => $request->input('answer')[1],
            'answer_3' => $request->input('answer')[2],
            'answer_4' => $request->input('answer')[3],
            'answer_5' => $request->input('answer')[4],
            'answer_6' => $request->input('answer')[5],
            'classificate' => $request->input('classificate'),
            'comments' => $request->input('comments')
        ]);
    
        return redirect()->route('servidores.index')->with('msg', 'Resposta enviada com sucesso!');
    
    
    }
}

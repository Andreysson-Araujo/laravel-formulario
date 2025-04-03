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
            'resposta' => 'required|string',
            'marcado_como' => 'required|string'
        ]);

        Formulario::create([
            'servidores_id'=> $request->servidores_id,
            'resposta'=> $request->resposta,
            'marcado_como'=> $request->marcado_como
        ]);

        return redirect()->route('servidores.index')->with('msg', 'Resposta enviada com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function create(Request $request)
    {
        return view('formularios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'servidor_id' => 'required|exists:servidores,id',
            'resposta' => 'required|string',
            'marcado_como' => 'required|string'
        ]);

        Formulario::create($request->all());

        return redirect()->route('servidores.index')->with('success', 'Resposta enviada com sucesso!');
    }
}

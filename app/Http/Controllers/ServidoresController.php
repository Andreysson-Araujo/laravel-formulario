<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servidores;
use App\Models\Orgao;
use App\Models\Nivel;

class ServidoresController extends Controller
{
    public function index()
    {
        $servidores = Servidores::all();
        return view('servidores.index', compact('servidores'));

    }

    public function create()
    {   $niveis = Nivel::all(); // Busca todos os níveis do banco
        $orgaos = Orgao::all(); // Pegando todos os órgãos
        return view('servidores.create', compact('niveis','orgaos'));
        
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_id' => 'required|exists:nivel,id',
            'orgao_id' => 'required|exists:orgaos,id',
        ]);

        Servidores::create($request->all());

        return redirect()->route('formularios.create')->with('success', 'Servidor cadastrado com sucesso!');
    }

    public function show($id)
    {
        $servidor = Servidores::findOrFail($id);
        return view('servidores.show', compact('servidor'));
    }

    public function edit($id)
    {
        $servidor = Servidores::findOrFail($id);
        return view('servidores.edit', compact('servidor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_id' => 'required|exists:nivel,id',
            'orgao_id' => 'required|exists:orgaos,id',
        ]);

        $servidor = Servidores::findOrFail($id);
        $servidor->update($request->all());

        return redirect()->route('servidores.index')->with('success', 'Servidor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Servidores::findOrFail($id)->delete();
        return redirect()->route('servidores.index')->with('success', 'Servidor removido com sucesso!');
    }
}
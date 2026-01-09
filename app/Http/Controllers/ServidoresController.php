<?php

namespace App\Http\Controllers;

use App\Models\Central;
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
        $centrais = Central::all();
        return view('servidores.create', compact('niveis','orgaos', 'centrais'));
        
        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_id' => 'required|exists:nivel,id',
            'orgao_id' => 'required|exists:orgaos,id',
            'central_id' => 'required|exists:central,id'
        ]);

        $servidor = Servidores::create($data);

        return redirect()->route('formulario.create', ['servidor_id' =>$servidor->id])->with('msg','Dado do Usuario Coletado com sucesso');
    }

    public function show($id)
    {
        $servidor = Servidores::findOrFail($id);
        return view('servidores.show', compact('servidor', 'centrais'));
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
            'central_id' => 'required|exists:central,id'
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
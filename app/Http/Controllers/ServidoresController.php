<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servidores;

class ServidoresController extends Controller
{
    public function index()
    {
        $servidores = Servidores::all();
        return view('servidores.index', compact('servidores'));
    }

    public function create()
    {
        return view('servidores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_id' => 'required|exists:niveis,id',
            'orgao_id' => 'required|exists:orgaos,id',
        ]);

        Servidores::create($request->all());

        return redirect()->route('servidores.index')->with('success', 'Servidor cadastrado com sucesso!');
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
            'nivel_id' => 'required|exists:niveis,id',
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
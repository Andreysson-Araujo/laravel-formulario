<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orgao;

class OrgaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orgaos = Orgao::all();
        return view('orgaos.index', compact('orgaos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orgaos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel' => 'required|string|max:100'
        ]);

        Orgao::create($request->all());
        return redirect()->route('orgaos.index')->with('success', 'Órgão criado com sucesso!');
    }

    /**
     * Display the specified resources.
     */
    public function show(string $id)
    {
        $orgao = Orgao::findOrFail($id);
        return view('orgaos.show', compact('orgao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orgao = Orgao::findOrFail($id);
        return view('orgaos.edit', compact('orgao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel' => 'required|string|max:100'
        ]);

        $orgao = Orgao::findOrFail($id);
        $orgao->update($request->all());
        return redirect()->route('orgaos.index')->with('success', 'Órgão atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Orgao::destroy($id);
        return redirect()->route('orgaos.index')->with('success', 'Órgão removido com sucesso!');
    }
}

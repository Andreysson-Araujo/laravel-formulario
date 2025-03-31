<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index', compact('niveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('niveis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        Nivel::create($request->all());
        return redirect()->route('niveis.index')->with('success', 'Nível criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('niveis.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nivel = Nivel::findOrFail($id);
        return view('niveis.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        $nivel = Nivel::findOrFail($id);
        $nivel->update($request->all());
        return redirect()->route('niveis.index')->with('success', 'Nível atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Nivel::destroy($id);
        return redirect()->route('niveis.index')->with('success', 'Nível removido com sucesso!');
    }
}

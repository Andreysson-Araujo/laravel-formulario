<?php

namespace App\Http\Controllers;

use App\Models\Central;
use Illuminate\Http\Request;

class CentralController extends Controller
{
    /**
     * Retorna lista de centrais para usar em selects ou listagens
     */
    public function index()
    {
        $centrais = Central::all();
        return view('centrais.index', compact('centrais'));
    }

    /**
     * Retorna as centrais em JSON (útil para AJAX)
     */
    public function getCentrais()
    {
        return response()->json(Central::all());
    }
}

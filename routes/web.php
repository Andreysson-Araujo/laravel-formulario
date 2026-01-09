<?php

use App\Http\Controllers\CentralController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PerguntaController;


Route::resource('orgaos', OrgaoController::class);
Route::resource('niveis', NivelController::class);
Route::resource('formulario', FormularioController::class);
Route::resource('central', CentralController::class);
Route::resource('perguntas', PerguntaController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('servidores', ServidoresController::class);
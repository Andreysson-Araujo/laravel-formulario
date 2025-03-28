<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\NivelController;



Route::resource('orgaos', OrgaoController::class);
Route::resource('niveis', NivelController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('servidores', ServidoresController::class);
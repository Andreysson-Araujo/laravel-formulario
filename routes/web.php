<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\ServidoresController;



Route::resource('orgaos', OrgaoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('servidores', ServidoresController::class);
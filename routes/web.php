<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrgaoController;



Route::resource('orgaos', OrgaoController::class);

Route::get('/', function () {
    return view('welcome');
});

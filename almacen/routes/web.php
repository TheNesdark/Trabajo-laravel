<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
    return view('index');
});

Route::resource('fabricantes', FabricanteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('usuarios', UsuarioController::class);

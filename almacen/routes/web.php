<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('fabricantes', FabricanteController::class);
Route::resource('productos', ProductoController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SqlController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('fabricantes', FabricanteController::class);
Route::resource('productos', ProductoController::class);
Route::get('sql', [SqlController::class, 'index'])->name('sql.index');

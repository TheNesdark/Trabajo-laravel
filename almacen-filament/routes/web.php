<?php

use Illuminate\Support\Facades\Route;

// Redirigir la ruta raíz al dashboard de Filament
Route::get('/', function () {
    return redirect('/dashboard');
});

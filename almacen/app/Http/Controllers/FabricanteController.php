<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricante; // Asegúrate de importar el modelo Fabricante
class FabricanteController extends Controller { 
    public function index() { 
        $query = Fabricante::query();
        if ($buscar = request('buscar')) {
            $query->where('nombre', 'like', '%' . $buscar . '%');
        }

        $fabricantes = $query->paginate(10);
        return view('fabricantes.index', compact('fabricantes')); 
    } 
    public function create() { 
        return view('fabricantes.create'); 
    } 
    public function store(Request $request) { 
        $request->validate(['nombre' => 'required']); 
        Fabricante::create($request->all()); 
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante creado exitosamente.'); 
    } 
        public function edit(Fabricante $fabricante) { 
        return view('fabricantes.edit', compact('fabricante')); 
    } 
        public function update(Request $request, Fabricante $fabricante) { 
        $request->validate(['nombre' => 'required']); 
        $fabricante->update($request->all()); 
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante actualizado exitosamente.'); 
    } 
        public function destroy(Fabricante $fabricante) { 
        $fabricante->delete(); 
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante eliminado exitosamente.'); 
    } 
} 

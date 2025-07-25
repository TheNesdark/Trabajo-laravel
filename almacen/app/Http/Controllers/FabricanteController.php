<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricante;

class FabricanteController extends Controller
{

    public function index()
    {
        $busqueda = request('search');
        if ($busqueda) {
            $fabricantes = Fabricante::where('nombre', 'like', '%' . $busqueda . '%')->paginate(10);
        } else {
            $fabricantes = Fabricante::paginate(10);
        }
        return view('fabricantes.index', compact('fabricantes'));
    }

 
    public function create()
    {
        return view('fabricantes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        Fabricante::create($request->all());
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante creado exitosamente.');
    }


    public function show(Fabricante $fabricante)
    {
        return view('fabricantes.show', compact('fabricante'));
    }


    public function edit(Fabricante $fabricante)
    {
        return view('fabricantes.edit', compact('fabricante'));
    }

    public function update(Request $request, Fabricante $fabricante)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        $fabricante->update($request->all());
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante actualizado exitosamente.');
    }


    public function destroy(Fabricante $fabricante)
    {
        $fabricante->delete();
        return redirect()->route('fabricantes.index')->with('success', 'Fabricante eliminado exitosamente.');
    }
}

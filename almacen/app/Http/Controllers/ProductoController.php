<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Fabricante; 

class ProductoController extends Controller
{
    public function index()
    {
        $query = Producto::query();
        if ($buscar = request('buscar')) {
            $query->where('nombre', 'like', '%' . $buscar . '%');
        }

        $productos = $query->paginate(10);
        $fabricantes = Fabricante::all();
        return view('productos.index', compact('productos', 'fabricantes'));
    }

 public function create()
{
    $fabricantes = Fabricante::all();
    return view('productos.create', compact('fabricantes'));
}


    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required'
            , 'precio' => 'required|numeric', 'codigo_fabricante' => 'required']);
        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate(['nombre' => 'required']);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Fabricante;

class ProductoController extends Controller
{
    public function index()
    {   
        $busqueda = request('search');
        if ($busqueda) {
            $productos = Producto::where('nombre', 'like', '%' . $busqueda . '%')
                ->orWhere('codigo_fabricante', 'like', '%' . $busqueda . '%')
                ->paginate(10);
        } else {
            $productos = Producto::paginate(10);
        }
        $fabricantes = Fabricante::all();
        return view('productos.index', compact('productos', 'fabricantes'));
    }
    public function create()
    {
        $fabricantes = Fabricante::all();
        $productos = Producto::all();
        return view('productos.create', compact('fabricantes', 'productos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'codigo_fabricante' => 'required|exists:fabricantes,codigo',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Producto $producto)
    {
        $fabricantes = Fabricante::all();
        return view('productos.edit', compact('producto', 'fabricantes'));
    }
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0', 
            'codigo_fabricante' => 'required|exists:fabricantes,codigo',
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
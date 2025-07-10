<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $busqueda = request('search');
        if ($busqueda) {  
            $usuarios = Usuario::where('usuario', 'like', '%' . $busqueda . '%')
                ->orWhere('nombre', 'like', '%' . $busqueda . '%')
                ->paginate(10);
        } else {
            $usuarios = Usuario::paginate(10);
        }
        return view('usuarios.index', compact('usuarios'));
    }
    public function create(){
        
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
    $request->validate([
        'usuario' => 'required|string|max:255|unique:usuarios,usuario',
        'nombre' => 'required|string|max:255',
        'password' => 'required|confirmed|min:6',
    ]);

    Usuario::create([
        'usuario' => $request->usuario,
        'nombre' => $request->nombre,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('usuarios.index')->with('status', 'Usuario creado correctamente.');

    }
    public function edit(Usuario $usuario){
        return view('usuarios.edit', compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario){
        $request->validate([
            'nombre' => 'required|string|max:100',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        $usuario->nombre = $request->nombre;
        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->password);   
        }
        $usuario->save();
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }
    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}

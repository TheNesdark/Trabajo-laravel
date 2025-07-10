@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container">
    <h1>Usuarios</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <form action="{{ route('usuarios.index') }}" method="GET" class="d-flex" style="max-width: 400px;">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar usuario..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo Usuario</a>
    </div>

    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->usuario }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>
                                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay usuarios registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if (method_exists($usuarios, 'links'))
        <div class="mt-3">
            {{ $usuarios->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection

@extends('layouts.app')

@section('title', 'Lista de Fabricantes')

@section('content')
<div class="container">
    <h1>Fabricantes</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <form action="{{ route('fabricantes.index') }}" method="GET" class="d-flex" style="max-width: 400px;">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar fabricante..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a href="{{ route('fabricantes.create') }}" class="btn btn-success">Nuevo Fabricante</a>
    </div>

    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fabricantes as $fab)
                        <tr>
                            <td>{{ $fab->codigo }}</td>
                            <td>{{ $fab->nombre }}</td>
                            <td>
                                <a href="{{ route('fabricantes.edit', $fab) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('fabricantes.destroy', $fab) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este fabricante?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay fabricantes registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if(method_exists($fabricantes, 'links'))
        <div class="mt-3">
            {{ $fabricantes->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection

@extends('layouts.app')
@section('title', 'Lista de Clientes')
@section('content')
<div class="container">

@section('title', 'Lista de Clientes')

@section('content')
<div class="container">
    <h1>Clientes</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <form action="{{ route('clientes.index') }}" method="GET" class="d-flex" style="max-width: 400px;">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar cliente..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a href="{{ route('clientes.create') }}" class="btn btn-success">Nuevo Cliente</a>
    </div>

    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID </th>
<th>Nombre</th>
<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cliente as $cli)
<tr>
    <td>{{ $cli->id}}</td>
    <td>{{ $cli->nombre }}</td>
    <td>
        <a href="{{ route('clientes.edit', $cli) }}" class="btn btn-sm btn-warning">Editar</a>
        <form action="{{ route('clientes.destroy', $cli) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="3" class="text-center">No hay clientes registrados.</td>
</tr>
@endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if(method_exists($cliente, 'links'))
        <div class="mt-3">
            {{ $cliente->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection

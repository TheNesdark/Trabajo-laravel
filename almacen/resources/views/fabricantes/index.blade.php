@extends('layouts.app')
@section('content')
@section('title', 'Lista de Fabricantes')
<h2>Fabricantes</h2>
<a href="{{ route('fabricantes.create') }}" class="btn btn-success mb-3">Nuevo</a>
<form action="{{ route('fabricantes.index') }}" method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="buscar" class="form-control me-2" placeholder="Buscar fabricante..." value="{{ request('buscar') }}">
    <button type="submit" class="btn btn-outline-primary">Buscar</button>
</form>
<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fabricantes as $fab)
        <tr>
            <td>{{ $fab->codigo }}</td>
            <td>{{ $fab->nombre }}</td>
            <td>
                <a href="{{ route('fabricantes.edit', $fab) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('fabricantes.destroy', $fab) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $fabricantes->links('pagination::bootstrap-4') !!}
</div>
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@endsection
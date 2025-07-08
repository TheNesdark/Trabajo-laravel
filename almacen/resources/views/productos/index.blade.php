@extends('layouts.app')
@section('content')
@section('title', 'Lista de Productos')
<h2>Productos</h2>
<a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Nuevo</a>
<form action="{{ route('productos.index') }}" method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="buscar" class="form-control me-2" placeholder="Buscar producto..." value="{{ request('buscar') }}">
    <button type="submit" class="btn btn-outline-primary">Buscar</button>
</form>
<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->codigo }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $fabricantes->firstWhere('codigo', $producto->codigo_fabricante)->nombre ?? 'Desconocido' }}</td>
            <td>
                <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
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
    {!! $productos->links('pagination::bootstrap-4') !!}
</div>
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@endsection
@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="container">
    <h1>Productos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <form action="{{ route('productos.index') }}" method="GET" class="d-flex" style="max-width: 400px;">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar producto..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo Producto</a>
    </div>

    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Fabricante</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <td>{{ $producto->codigo }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>${{ number_format($producto->precio, 2) }}</td>
                            <td>
                                {{ $producto->fabricante->nombre ?? 'Desconocido' }}
                            </td>
                            <td>
                                <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay productos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if (method_exists($productos, 'links'))
        <div class="mt-3">
            {{ $productos->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection

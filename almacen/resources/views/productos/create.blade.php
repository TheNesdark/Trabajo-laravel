@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>¡Ups! Algo salió mal:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="codigo_fabricante" class="form-label">Código Fabricante</label>
                    <select class="form-select" id="codigo_fabricante" name="codigo_fabricante" required>
                    <option value="" disabled selected>Seleccione un fabricante</option>
                    @foreach($fabricantes as $fabricante)
                        <option value="{{ $fabricante->codigo }}">{{ $fabricante->nombre }}</option>

                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection

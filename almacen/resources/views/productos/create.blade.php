@extends('layouts.app') 
@section('content') 
@section('title', 'Nuevo Producto')
<h2>Nuevo Producto</h2> 
<form method="POST" action="{{ route('productos.store') }}"> 
@csrf 
<div class="mb-3"> 
<label class="form-label">Nombre:</label> 
<input type="text" name="nombre" class="form-control" required> 
</div> 
<div class="mb-3"> 
<label class="form-label">Precio:</label> 
<input type="number" name="precio" class="form-control" required> 
</div>
<div class="mb-3"> 
<label class="form-label">Código Fabricante:</label>
<select name="codigo_fabricante" class="form-select" required>
    @foreach ($fabricantes as $fabricante)
        <option value="{{ $fabricante->codigo }}">{{ $fabricante->nombre }}</option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Guardar</button> 
<a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a> 
</form> 
@endsection 
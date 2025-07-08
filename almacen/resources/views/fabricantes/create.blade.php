@extends('layouts.app') 
@section('content') 
@section('title', 'Nuevo Fabricante')
<h2>Nuevo Fabricante</h2> 
<form method="POST" action="{{ route('fabricantes.store') }}"> 
@csrf 
<div class="mb-3"> 
<label class="form-label">Nombre:</label> 
<input type="text" name="nombre" class="form-control" required> 
</div> 
<button type="submit" class="btn btn-success">Guardar</button> 
<a href="{{ route('Fabricantes.index') }}" class="btn btn-secondary">Cancelar</a> 
</form> 
@endsection 
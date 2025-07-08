@extends('layouts.app') 
@section('content') 
@section('title', 'Editar Fabricante')
<h2>Editar Fabricante</h2> 
<form method="POST" action="{{ route('fabricantes.update', $fabricante) }}"> 
@csrf 
@method('PUT') 
<div class="mb-3"> 
<label class="form-label">Nombre:</label> 
<input type="text" name="nombre" class="form-control" value="{{ 
$fabricante->nombre }}" required> 
</div> 
<button type="submit" class="btn btn-primary">Actualizar</button> 
<a href="{{ route('fabricantes.index') }}" class="btn btn
secondary">Cancelar</a> 
</form> 
@endsection
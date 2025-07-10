@extends('layouts.app') 
@section('content') 
<h2>Nuevo Fabricante</h2> 
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
<form method="POST" action="{{ route('fabricantes.store') }}"> 
@csrf 
<div class="mb-3"> 
<label class="form-label">Nombre:</label> 
<input type="text" name="nombre" class="form-control" required> 
</div> 
<button type="submit" class="btn btn-success">Guardar</button> 
<a href="{{ route('fabricantes.index') }}" class="btn btn
secondary">Cancelar</a> 
</form> 
@endsection 
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenido al sistema de gestión de productos</h1>
        <p>Utiliza el menú para navegar a través de las diferentes secciones.</p>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Productos</h3>
                    </div>
                    <div class="card-body">
                        <p>Gestiona los productos de tu inventario.</p>
                        <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Fabricantes</h3>
                    </div>
                    <div class="card-body">
                        <p>Administra los fabricantes de los productos.</p>
                        <a href="{{ route('fabricantes.index') }}" class="btn btn-primary">Ver Fabricantes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Usuarios</h3>
                    </div>
                    <div class="card-body"> 
                        <p>Gestiona los usuarios del sistema.</p>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Ver Usuarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

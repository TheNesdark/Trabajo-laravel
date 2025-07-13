@extends('layouts.app')
@section('title', 'Detalle de Cliente')
@section('content')
<div class="container">

        <h1>Detalle de Cliente</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">

                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Show Cliente
                            </h2>
                            <div class="mb-3">
    <a class="btn btn-secondary" href="{{ route('clientes.index') }}" title="Volver">&lt; Volver</a>
</div>
                        </header>
                        </br>

                        <div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Documento</th>
                <td>{{ $cliente->documento }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $cliente->nombre }}</td>
            </tr>
        </table>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>

                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title', 'Editar Cliente')
@section('content')
<div class="container">

        <h2>Editar Cliente</h2>
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <section>
                        <header>

                            <div class="mb-3">
    <a class="btn btn-secondary" href="{{ route('clientes.index') }}" title="Volver">&lt; Volver</a>
</div>
                        </header>

                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        @include('clientes.form', ['formMode' => 'edit'])
    </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<?php
$pdo=new PDO('mysql:host=127.0.0.1;dbname=almacen', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    $consulta = $_POST['consulta'] ?? '';
    if ($consulta) {
        try {
            $stmt = $pdo->prepare($consulta);
            $stmt->execute();
        } catch (PDOException $e) {
            $error = 'Error en la consulta: ' . $e->getMessage();
        }
    } else {
        $error = 'Por favor, ingrese una consulta SQL.';
    }
}
?>
@extends('layouts.app')
@section('content')
<div>
    <form action="" method="GET" class="mb-3">
        @csrf
        <h2>Consulta SQL</h2>
        <div class="mb-3">
            <label for="consulta" class="form-label">Consulta SQL:</label>
            <textarea name="consulta" id="consulta" class="form-control" rows="5">{{ old('consulta') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ejecutar Consulta</button>
    </form>
</div>

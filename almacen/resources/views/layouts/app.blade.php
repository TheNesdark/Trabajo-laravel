<html lang="es"> 
<head> 
<meta charset="UTF-8"> 
<title>@yield('title', 'Almacen')</title>
<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body> 
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
<div class="container-fluid">
<a class="navbar-brand" href="{{ url('/') }}">Almacen</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="{{ route('fabricantes.index') }}">Fabricantes</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="container mt-4"> 
@yield('content') 
</div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
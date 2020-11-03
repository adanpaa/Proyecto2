@extends('layouts.app')
@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductForm</title>
</head>
<body>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Nuevo Producto</h2>
      <ol>
        <li><a href="/inicio">Home</a></li>
        <li>NuevoProducto</li>
      </ol>
    </div>
    
  </div>
</section><!-- End Breadcrumbs -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($producto))
<form action="{{ route('producto.update', [$producto]) }}" method="POST">
@method('patch');
@else
<form action="{{ route('producto.store')}}" method="POST">
@endif
    @csrf
    <ul align=center>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre') ?? $producto->nombre ?? '' }}"><br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" value="{{ old('precio') ?? $producto->precio ?? '' }}"><br>

    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion">{{ old('descripcion') ?? $producto->descripcion ?? '' }}</textarea><br>

    <label for="enlace">Enlace:</label>
    <input type="text" name="enlace" value="{{ old('enlace') ?? $producto->enlace ?? '' }}"><br>

    <button type="submit">Guardar</button>
</ul>
</form>


</body>
</html>


@endsection

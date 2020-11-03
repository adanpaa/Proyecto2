@extends('layouts.app')
@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto</title>
</head>
<body>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Informacion de Producto</h2>
      <ol>
        <li><a href="/inicio">Home</a></li>
        <li>Producto</li>
      </ol>
    </div>
    
  </div>
</section><!-- End Breadcrumbs -->

<ul align=center>
<a href="{{ action([\App\Http\Controllers\ProductosController::class, 'create']) }}">Añadir nuevo producto</a><br>
<a href="{{ route('producto.edit', [$producto->id]) }}">Editar Producto</a><br>
<form action="{{ route('producto.destroy', [$producto]) }}" method="POST">
  @method('DELETE')
  @csrf

  <button type="submit">Eliminar Producto</button>
</form>
</ul>

<table align=center border='1'>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descripcion</th>
    <th>Enlace</th>
  </tr>
    <tr>
      <td>{{ $producto->id }}</td>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->precio }}</td>
      <td>{{ $producto->descripcion }}</td>
      <td>{{ $producto->enlace }}</td>
    </tr>
</table>

<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">   
  </div>
</section><!-- End Breadcrumbs -->

</body>
</html>

@endsection
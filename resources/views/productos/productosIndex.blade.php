@extends('layouts.app')
@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
</head>
<body>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Productos</h2>
      <ol>
        <li><a href="/inicio">Home</a></li>
        <li>Productos</li>
      </ol>
    </div>
    
  </div>
</section><!-- End Breadcrumbs -->

<p align=center>
<a href="/productos/create">Añadir nuevo producto</a>
</p>

<table align=center border='1'>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descripcion</th>
    <th>Enlace</th>
  </tr>
  @foreach ($productos as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td><a href="/productos/{{ $p->id }}">{{ $p->nombre }}</a></td>
      <td>{{ $p->precio }}</td>
      <td>{{ $p->descripcion }}</td>
      <td>{{ $p->enlace }}</td>
    </tr>
  @endforeach
</table>

<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">   
  </div>
</section><!-- End Breadcrumbs -->

</body>
</html>

@endsection
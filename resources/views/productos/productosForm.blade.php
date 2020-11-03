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


<form action="/productos" method="POST">
    @csrf
    <button type="submit">Guardar</button>
</form>


</body>
</html>


@endsection

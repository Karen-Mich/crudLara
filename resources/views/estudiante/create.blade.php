@extends('estudiante/template')
@section('title','NuevoEstudiante')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<form action = "{{url('/estudiantes')}}" method = "POST">
@csrf
<div>
    <label for = "cedula">Cedula</label>
    <input type = "text" name = "cedula" id="cedula">
</div>
<div>
    <label for = "nombre">Nombre</label>
    <input type = "text" name = "nombre" id="nombre">
</div>
<div>
    <label for = "apellido">Apellido</label>
    <input type = "text" name = "apellido" id="apellido">
</div>
<div>
    <label for = "telefono">Telefono</label>
    <input type = "text" name = "telefono" id="telefono">
</div>
<div>
    <label for = "direccion">Direccion</label>
    <input type = "text" name = "direccion" id="direccion">
</div>
<button type = "submit">Guardar</button>

</form>
@endsection
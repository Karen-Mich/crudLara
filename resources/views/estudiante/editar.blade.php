@extends('estudiante/template')
@section('title','EditarEstudiante')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Editar Estudiante</h1>
<form action="{{ url('estudiantes/'.$estudiante['cedula']) }}" method="post">
    @method("PUT")
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $estudiante['nombre'] }}" required>
    <label for="nombre">Apellido:</label>
    <input type="text" name="apellido" value="{{ $estudiante['apellido'] }}" required>
    <label for="nombre">Direccion:</label>
    <input type="text" name="direccion" value="{{ $estudiante['direccion'] }}" required>
    <label for="nombre">Telefono:</label>
    <input type="text" name="telefono" value="{{ $estudiante['telefono'] }}" required>
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>

@endsection

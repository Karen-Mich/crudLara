@extends('estudiante/template')
@section('title','MostrarTodos')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<h1>Lista Estudiantes</h1>

<table class="table">
    <thead>
        <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        </tr>
</thead>

<tbody>
    @foreach($estudiantesArray AS $estudiante)
    <tr>
        <td> {{$estudiante['cedula']}}</td>
        <td> {{$estudiante['nombre']}}</td>
        <td> {{$estudiante['apellido']}}</td>
        <td> {{$estudiante['direccion']}}</td>
        <td> {{$estudiante['telefono']}}</td>

        <td>
            <form action="{{ url('estudiantes/'.$estudiante['cedula']) }}" method = "post">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

            <form action="{{ url('estudiantes/'.$estudiante['cedula'].'/edit') }}" method="get">
    <button type="submit" class="btn btn-warning">Editar</button>
</form>

           
           

        </td>
        
</tr>
@endforeach
</tbody>
</table>
<a href = "{{url('estudiantes/create')}}" class="btn btn-success">Crear Nuevo Estudiante </a>
        
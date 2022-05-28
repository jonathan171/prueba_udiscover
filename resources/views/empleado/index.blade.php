@extends('layouts.base')

@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Empleados</h2>
            </div>
            <div class="pull-right">
            <a href="empleados/create" class="btn btn-primary">Nuevo Empleado</a>
        </div>
    </div>

<table class="table  table-spriped mt-4">
    <thead>
        <th scope="col">N°</th>
        <th scope="col">Primer nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Compañia</th>
        <th scope="col">Correo</th>
        <th scope="col"> Acciones</th>
    </thead>
    <tbody>
        @foreach ($data as $key => $empleado)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$empleado->primer_nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->companies->nombre}}</td>
            <td>{{$empleado->correo}}</td>
            <td>
                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">   
                    
                    <a class="btn btn-primary" href="{{ route('empleados.edit',$empleado->id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
{!! $data->links() !!}
@endsection
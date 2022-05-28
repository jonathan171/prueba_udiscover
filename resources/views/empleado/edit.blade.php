@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Empleado</h2>
        </div>

    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    
    <ul class="alert alert-danger" >
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('empleados.update',$empleado->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Primer nombre:</strong>
                <input type="text" name="primer_nombre" class="form-control" placeholder="Ingrese primer nombre" value="{{$empleado->primer_nombre}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input class="form-control" name="apellido" placeholder="Ingrese Apellido" type="text" value="{{$empleado->apellido}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Compañia:</strong>
                <select id="compania_id" name="compania_id" class="form-control">

                    @foreach($companies as $company)
                    @if($company->id === $empleado->compania_id)
                      <option value="{{$company->id}}" selected> {{$company->nombre}} </option>
                    @else
                      <option value="{{$company->id}}"> {{$company->nombre}} </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                <input class="form-control" name="correo" placeholder="Ingrese un correo" type="email" value="{{$empleado->correo}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input class="form-control" name="telefono" placeholder="Ingrese un telefono" type="number" value="{{$empleado->telefono}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <a class="btn btn-secondary" href="{{ route('empleados.index') }}"> Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    </div>
    </div>

</form>
@endsection
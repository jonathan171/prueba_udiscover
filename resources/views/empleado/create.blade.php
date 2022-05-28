
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
        <strong>Vaya!</strong> Hubo algunos problemas al guardar.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Primer nombre:</strong>
                <input type="text" name="primer_nombre" class="form-control" placeholder="Ingrese primer nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input class="form-control"  name="apellido" placeholder="Ingrese Apellido" type="text">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Compañia:</strong>
                <select id="compania_id" name="compania_id" class="form-control">
                    @foreach($companies as $company)
                        <option value="{{$company->id}}"> {{$company->nombre}} </option>
                    @endforeach  
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                <input class="form-control"  name="correo" placeholder="Ingrese un correo" type="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input class="form-control"  name="telefono" placeholder="Ingrese un telefono" type="number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        
            <a class="btn btn-secondary" href="{{ route('empleados.index') }}"> Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
               
        </div>
    </div>
   
</form>
@endsection
@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Compañia</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Vaya!</strong> Hubo algunos problemas al editar.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('companias.update',$compania->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre" value="{{ $compania->nombre }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                <input class="form-control"  name="correo" placeholder="Ingrese un correo" type="email" value="{{ $compania->correo }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logo:</strong>
                <input class="form-control"  name="logo" placeholder="Ingrese un correo" type="file" >
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pagina web:</strong>
                <input class="form-control"  name="pagina_web" placeholder="Ingrese un correo" type="text" value="{{ $compania->pagina_web }}">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <a class="btn btn-secondary" href="{{ route('companias.index') }}"> Cancelar</a>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
   
    </form>
@endsection
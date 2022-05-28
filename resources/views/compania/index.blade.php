@extends('layouts.base')

@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Compañias</h2>
            </div>
            <div class="pull-right">
            <a href="companias/create" class="btn btn-primary">Nueva compañia</a>
        </div>
    </div>

<table class="table  table-spriped mt-4">
    <thead>
        <th scope="col">N°</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Logo</th>
        <th scope="col"> Acciones</th>
    </thead>
    <tbody>
        @foreach ($data as $key => $company)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$company->nombre}}</td>
            <td>{{$company->correo}}</td>
            <td>
              <img class="img-fluid rounded-circle avatar mb-3" src="{{ asset('storage/companies/'.$company->logo)}}" alt="Logo">
            </td>
            <td>
                <form action="{{ route('companias.destroy',$company->id) }}" method="POST">   
                    
                    <a class="btn btn-primary" href="{{ route('companias.edit',$company->id) }}">Editar</a>   
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
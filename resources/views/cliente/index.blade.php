@extends('layouts.app')

@section('content')





@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="aler">
    {{Session::get('Mensaje')}}
    </div>
@endif

<br>
<!-- ---------------------------------- -->
<nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <input name="Search" class="form-control mr-sm-2" type="search" placeholder="Buscar por RFC" aria-label="Search">

       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav> 
<br>
<a href="{{url('cliente/create')}}" class="btn btn-primary">Agregar Cliente</a>
<br>
<!-- ----------------------------------------- -->

<table class="table table-light table-hover" >
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RFC</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>IdCiudad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($cliente as $clientet )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{  $clientet->rfc }}</td>
                <td>{{  $clientet->nombre  }}</td>
                <td>{{  $clientet->edad  }}</td> 
                <td>{{  $clientet->idciudad }}</td>
                <td>
                     <a class="btn btn-secondary" href="{{ url('/cliente/'.$clientet->rfc.'/edit')}}">
                     Editar
                    <!-- <button>Editar</button>  -->
                    </a>
                    
                
                    <form method="post" action="{{ url('/cliente/'.$clientet->rfc)}}" style="display:inline;">
                        {{csrf_field()}}
                        {{method_field('DELETE') }}
                        <button class="btn btn-danger"  type="submit" onclick="return confirm('¿Desea borrar?');" > Borrar</button>
                    </form>
                </td>
            </tr>
    @endforeach
    </tbody>
</table>

{{ $cliente->links() }}
@endsection
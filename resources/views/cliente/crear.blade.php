<H3>REGISTRAR CLIENTE</H3>
@extends('layouts.app')

@section('content')

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
     <ul>
        @foreach($errors->all() as $error)
             <li> {{$error}} </li>
        @endforeach
    </ul>
    
</div>
@endif

<form action="{{ url('/cliente') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <!-- para seguridad de los datos -->
    @include('cliente.form',['modo'=>'crear'])
</form>

@endsection
<H3>EDITAR CLIENTE</H3>
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
<form action="{{ url('/cliente/'.$cliente->rfc)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
    @include('cliente.form',['modo'=>'editar'])
</form>
@endsection
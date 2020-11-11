    <div class="form-group">
        <label for="RFC" class="control.label"> {{'RFC'}}</label>
        @if(isset($cliente->rfc))
            <input disabled type="text"  maxlength="13"
            class="form-control 
            {{$errors->has('rfc')?'is-invalid':''}}" name="rfc" id="rfc" 
            value="{{isset($cliente->rfc)?$cliente->rfc:old('rfc') }}">
        @else
        <input  type="text" maxlength="13" placeholder="Introduzca RFC"
        require pattern="[A-Z]{4}[0-9]{6}[A-Z0-9]{3}"
        title="Formato de RFC incorrecto"
         class="form-control {{$errors->has('rfc')?'is-invalid':''}}"  name="rfc" id="rfc" 
            value="{{isset($cliente->rfc)?$cliente->rfc:old('rfc') }}">
        @endif
    </div>
    <!-- isset  si ? entonces     : de lo contrario -->
    <!-- {{$errors->has('rfc')?'is-invalid':''}} -->
    
    <div class="form-group">
        
        <label for="Nombre"
         class="control.label"> {{'Nombre'}}</label>
        <input type="text"
        placeholder="Introduzca Nombre" maxlength="50"
        class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" id="nombre" 
        value="{{isset($cliente->nombre)?$cliente->nombre:old('nombre')}}">
    </div>
    <div class="form-group">
        
        <label for="Edad" class="control.label"> {{'Edad'}}</label>
        <input type="number" 
        placeholder="Introduzca Edad"
        class="form-control {{$errors->has('edad')?'is-invalid':''}}" name="edad" id="edad" 
        value="{{isset($cliente->edad)?$cliente->edad:old('edad') }}">
    </div>
    <div class="form-group">
        
        <label for="IdCiudad" 
      
        class="control.label"> {{'Id Ciudad'}}</label>
        <input type="number"  placeholder="Introduzca IdCiudad" class="form-control {{$errors->has('idciudad')?'is-invalid':''}}" name="idciudad" id="idciudad" 
        value="{{isset($cliente->idciudad)?$cliente->idciudad:old('idciudad') }}">
    </div>
    
    <input type="submit" class="btn btn-success" value="{{$modo=='crear' ? 'Agregar datos': 'Modificar datos'}}">
    <a class="btn btn-dark" href="{{url('cliente')}}">Regresar</a>

  
hola

<form action="{{url('/estudiantes/'.$estudiante->id)}}" method="post" >

	{{ csrf_field() }}	
	{{ method_field('PATCH') }}	

	<div class="form-group">
 

    <label for="Nombre"  class="control-label" >{{'Nombre'}}</label>
	<input type="text" placeholder="Nombre"  name="nombre" id="nombre" 	value="{{ isset($estudiante->nombre)?$estudiante->nombre:old('nombre') }}">
    
    {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')  !!}

    <br>
    <label for="Paterno"  class="control-label" >{{'Paterno'}}</label>
    <input type="text" placeholder="paterno"  name="appaterno" id="appaterno" 	value="{{ isset($estudiante->appaterno)?$estudiante->appaterno:old('appaterno') }}">
    
    {!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>')  !!}

	<br>

    <label for="Materno"  class="control-label" >{{'Materno'}}</label>
    <input type="text" placeholder="escribe tu apellido materno"  name="apmaterno" id="apmaterno" 	value="{{ isset($estudiante->apmaterno)?$estudiante->apmaterno:old('apmaterno') }}">
    
    {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}

    <br>

    <input type="submit"  class="btn btn-success" value="Actualizar">
    </div>
</form>
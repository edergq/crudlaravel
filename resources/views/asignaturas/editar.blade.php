<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
este es el archiv editar

<div class="form-group thead-dark">
<div class="container">


<form action="{{url('/asignaturas/'.$asignatura->id)}}" method="post" >

	{{ csrf_field() }}	
	{{ method_field('PATCH') }}	

	<div class="form-group">

    <label for="Nombre"  class="control-label" >{{'Nombre'}}</label>
	<input type="text" placeholder="Nombre"  name="name" id="name" 	value="{{ isset($asignatura->name)?$asignatura->name:old('name') }}">
    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')  !!}

    <br>
    <label for="Descripcion"  class="control-label" >{{'Descripcion'}}</label>
	<input type="text" placeholder="Descripcion"  name="descripcion" id="descripcion" 	value="{{ isset($asignatura->descripcion)?$asignatura->descripcion:old('descripcion') }}">
    <br>
	
    <input type="submit"  class="btn btn-success" value="Actualizar">
    </div>



</form>
</div>
</div>
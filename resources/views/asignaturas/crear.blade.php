este es el archivo crear

<form action="{{url('/asignaturas')}}" method="post">

{{ csrf_field() }}

<label for="Nombre">{{'Nombre Asignatura:'}} </label>
<input type="text" name="name" id="name" value="">
<br>

<label for="Descripcion">{{'Descripcion:'}} </label>
<input type="text" name="descripcion" id="descripcion" value="">
<br>

<input type="submit" value="Agregar">
</form>

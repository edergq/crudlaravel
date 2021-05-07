<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


este es el archivo estudiante index
<div class="container">

<center>
<a href="{{ url('/estudiantes/create') }}"  class="btn btn-success"  >Agregar Estudiante</a>
</center>

<table>	
	<thead>
		<tr>
			<th>#</th>			
			<th>Nombre</th>			
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($estudiantes as $estudiante)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $estudiante->nombre}}</td>
            <td>{{ $estudiante->appaterno}}</td>
            <td>{{ $estudiante->apmaterno}}</td>
			<td>
			<a href="{{ url('/estudiantes/'.$estudiante->id.'/edit') }}"  class="btn btn-warning" onclick="return confirm('Desea Actualizar?');"  > Actualizar</a>			
			
			| 
		
			<form method="post" action="{{url('/estudiantes/'.$estudiante->id)}}" style="display:inline" >
			  
			  {{ csrf_field() }}
			  {{ method_field('DELETE') }}
			  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>
			</form>





			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $estudiantes->links() }}
</div>
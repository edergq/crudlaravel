estes es nuestro index

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<div class="container">
<br>
<center>
<a href="{{ url('/asignaturas/create') }}"  class="btn btn-success"  >Agregar Asignatura</a>
</center>


<table class="table table-sm table-hover">	
	<thead class="thead-dark">
		<tr>
			<th>#</th>			
			<th>Curso </th>			
			<th>Descripcion</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($asignaturas as $asignatura)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $asignatura->name}}</td>
            <td>{{ $asignatura->descripcion}}</td>
			<td>
			
			 
			<a href="{{ url('/asignaturas/'.$asignatura->id.'/edit') }}" class="btn btn-warning"  onclick="return confirm('Desea Actualizar?');"  >
			Actualizar  
			</a>
			| 	
			
					
			<form method="post" action="{{url('/asignaturas/'.$asignatura->id)}}" style="display:inline" >
			  
			  	{{ csrf_field() }}
			  	{{ method_field('DELETE') }}
			  	<button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>
			</form>


			</td>
	
		</tr>
		@endforeach
	</tbody>
</table>

</div>

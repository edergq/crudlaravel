estes es nuestro index



<br>
<center>
<a href="{{ url('/asignaturas/create') }}"   >Agregar Asignatura</a>
</center>


<table class="table table-sm table-hover ">	
	<thead class="thead-dark">
		<tr>
			<th>#</th>			
			<th>Curso </th>			
			<th>Descripcion</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($asignaturas as $asignatura)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $asignatura->name}}</td>
            <td>{{ $asignatura->descripcion}}</td>
	
		</tr>
		@endforeach
	</tbody>
</table>

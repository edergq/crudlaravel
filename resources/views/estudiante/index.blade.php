este es el archivo estudiante index
<table>	
	<thead>
		<tr>
			<th>#</th>			
			<th>Nombre</th>			
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($estudiantes as $estudiante)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $estudiante->nombre}}</td>
            <td>{{ $estudiante->appaterno}}</td>
            <td>{{ $estudiante->apmaterno}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

<table class="table">
	<thead>
		<tr>
			<th>Placa</th>
			<th>Unidad</th>
			<th>Marca</th>
			<th>Chofer</th>
			<th>Estado</th>
			<th>Opcion</th>
		</tr>
	</thead>
	<tbody>
	@foreach($vehiculos as $v)
	<tr>
		<td>{{$v->placa}}</td>
		<td>{{$v->unidad}}</td>
		<td>{{$v->marca}}</td>
		<td>{{$v->chofer}}</td>
		@if($v->estado=='1') 
            <td>
            <span class="badge badge-success">Activo</span>
             </td> 
            <td><div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opcion
                <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Actualizar</a>
                    <a class="dropdown-item" href="#" onclick="eliminar_vehiculo({{$v->id}})">Eliminar</a> 
                </div> 
                </div> 
            </td> 
            @else
            <td>
            <span class="badge badge-danger">Desactivado</span>
             </td> 
            <td><div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opcion
                <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Actualizar</a>
                    <a class="dropdown-item" href="#" onclick="activar_vehiculo({{$v->id}})">Activar</a> 
                </div> 
                </div> 
            </td> 
            @endif

	</tr>
	@endforeach
    </tbody>
</table>

@section('js')
    <script src="{{asset('js/vehiculo.js')}}"></script>
@endsection
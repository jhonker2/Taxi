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
		<td> 
			@if($v->estado=='1') 
            <span class="badge badge-success">Activo</span>
            @else
            <span class="badge badge-warnig">Desactivado</span>
            @endif
        </td>
        <td><div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opcion
                <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Actualizar</a>
                    <a class="dropdown-item" href="#" value="{{$v->id}}">Eliminar</a> 
                </div> 
                </div> 
            </td> 

	</tr>
	@endforeach
    </tbody>
</table>

@section('js')
    <script src="{{asset('js/vehiculo.js')}}"></script>
@endsection
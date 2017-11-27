<table class="table">
    <thead> <tr> <th>Chofer</th> <th>Telefono</th> <th>Cédula</th><th>Estado</th><th>Opciones</th> </tr>
    </thead>
    <tbody>
    @foreach($choferes as $d)
        <tr> 
            <td>{{$d->chofer}}</td> 
            <td>{{$d->telefono}}</td> 
            <td>{{$d->cedula}}</td> 
            <td>
            @if($d->estado=='1') 
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
                    <a class="dropdown-item" href="#" onclick="eliminar_chofer({{$d->id}})">Eliminar</a> 
                </div> 
                </div> 
            </td> 
        </tr> 
    @endforeach 
    </tbody>
</table>

@section('js')
    <script src="{{asset('js/chofer.js')}}"></script>
@endsection
<div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Listado de Choferes
                                     <div class="card-actions">
                                        <a href="#"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                </div>

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
            @else
            <span class="badge badge-danger">Desactivado</span>
             </td> 
            <td><div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opcion
                <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Actualizar</a>
                    <a class="dropdown-item" href="#" onclick="activar_chofer({{$d->id}})">Activar</a> 
                </div> 
                </div> 
            </td> 
            @endif
           
        </tr> 
    @endforeach 
    </tbody>
</table>

</div></div></div></div></div>

@section('js')
    <script src="{{asset('js/chofer.js')}}"></script>
@endsection
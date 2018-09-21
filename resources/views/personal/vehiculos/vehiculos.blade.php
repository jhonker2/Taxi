@extends('layouts.App')

@section('css')
 <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
                        <i class="fa fa-align-justify"></i> Administración de Vehiculos
                        <div class="card-actions">
                            <a href="#"><i class="fa fa-plus-square-o"></i></a>
                       </div>
                    </div>
                    <div class="card-block" id="tabla_vehiculo">
                    	@include('vehiculos.tabla')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('js')
    <script src="{{asset('js/vehiculo.js')}}"></script>
@endsection
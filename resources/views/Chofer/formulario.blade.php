@extends('layouts.App')

@section('css')
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<input  type="hidden" name="_token" value="{{csrf_token()}}" id="token">
	<br>
	<div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Registrar Choferes
                                     <div class="card-actions">
                                        <a href="#"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                </div>
                                <div class="card-block">
                                <div class="row gif_registro">
                                    <img src="{{asset('img/load.gif')}}" style="width: 150px; height: 150px" alt="">
                                    <div class="msg_registro">Registrado informacion espere un momento</div>
                                </div>
                                	<div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Nombres</label>
                                                <input type="text" class="form-control" id="nombres" placeholder="Ingrese los nombres">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Apellidos</label>
                                                <input type="text" class="form-control" id="apellidos" placeholder="Ingrese los apellidos">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Cedula</label>
                                                <input type="text" class="form-control" id="cedula" placeholder="Ingrese el numero de Cédula">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Telefono</label>
                                                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el numero celular">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Convensional</label>
                                                <input type="text" class="form-control" id="convensional" placeholder="Ingrese el numero convensional">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Direccion</label>
                                                <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion(opcional)">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                    	 <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Usuario</label>
                                                <input type="text" class="form-control" id="usuario" placeholder="Ingrese nombre de usuario">
                                            </div>

                                        </div>
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Clave</label>
                                                <input type="password" class="form-control" id="clave" placeholder="Ingrese una clave de acceso">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                        	
                                        </div>
                                    </div>
									<div class="row">
                                         <div class="col-sm-4">
											<button type="button" id="btn_registrar" class="btn btn_taxi">Registrar Chofer</button>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
		</div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/chofer.js')}}"></script>
@endsection
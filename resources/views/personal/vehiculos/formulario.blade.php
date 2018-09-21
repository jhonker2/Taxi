
<input  type="hidden" name="_token" value="{{csrf_token()}}" id="token">
	<br>
	<div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Registrar Vehiculo
                                     <div class="card-actions">
                                        <a href="#"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                </div>
                                <div class="card-block">
                                	<div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Placa</label>
                                                <input type="text" class="form-control" id="placa" placeholder="Enter your name">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Unidad</label>
                                                <input type="text" class="form-control" id="unidad" placeholder="Enter your name">
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">Marca</label>
                                                <input type="text" class="form-control" id="marca" placeholder="Enter your name">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group" style="margin-left: -14px;">
                                            <label>Chofer</label>
                                            <select class="form-control selcls" id="list_chofer">
                                                    @foreach($chofer as $c)
                                                   <option value="{{$c->id}}">{{$c->chofer}}</option>
                                                   @endforeach
                                            </select>
                                       </div>
                                    </div>
									<div class="row">
                                         <div class="col-sm-4">
											<button type="button" id="btn_registrar" class="btn btn_taxi">Registrar Vehiculo</button>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
		</div>
    </div>

@section('js')
    <script src="{{asset('js/vehiculo.js')}}"></script>
@endsection
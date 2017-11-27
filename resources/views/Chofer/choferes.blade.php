@extends('layouts.App')

@section('css')

@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
                        <i class="fa fa-align-justify"></i> Administración de Choferes
                        <div class="card-actions">
                            <a href="#"><i class="fa fa-plus-square-o"></i></a>
                       </div>
                    </div>
                    <div class="card-block">
                    	@include('Chofer.tabla')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

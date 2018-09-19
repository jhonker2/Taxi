@extends('layouts.App')

@section('css')
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
    <style>
    	.personal-menu li{
    		float: right;
            list-style: none;
            background: #eceff1;
            padding: 12px;
    		
    	}
    	.personal-menu li a{
    		text-decoration: none;
    		padding: 50px;   	}
    </style>
@endsection

@section('content')
<br>

<div class="container-fluid">
    <div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="header" style="background: #eceff1;">
						 <ul class="personal-menu">
						 	<li><a style="text-decoration: none;" href="monitores">monitores</a></li>
						 	<li><a href="choferes">Choferes</a></li>
						 </ul>
                    </div>
                   
				</div>
			</div>
		</div>
	</div>
</div>

<div id="personal">
    @yield('content-personal')
</div>
@endsection

@section('js')
    <script src="{{asset('js/chofer.js')}}"></script>
    <script>
	$("#Monitores").click(function(){
		$("#personal").load('personal/monitores/formulario.blade.php');
	})
    </script>
@endsection


@extends('layouts.App')

@section('css')
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">
    <style>
    	.personal-menu li{
    		float: right;
            list-style: none;
            background: #171819;;
            padding: 15px;
            border-left:1px solid white;
            color: white;


    		
    	}
        .personal-menu li:hover{
            background: #f8e85b;
            color:black;

     
        }
       
    	


    </style>
@endsection

@section('content')

<div class="container-fluid app-header " style="width: 85%;height: 74px;padding-top: 12px;background: #eceff1;padding-bottom: 0px;">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header" style="background: #171819;border:1px solid yellow;">
                         <ul class="personal-menu">
                            <li id="op1">Monitores</li>
                            <li id="op3">Vehiculos</li>
                            <li id="op2">Choferes</li>

                         </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div id="personal">
    
</div>

@endsection

@section('js')

<script>
    
    $("#op2").click(function(){
        $("#personal").load('/chofer_formulario');
    })
</script>

<script>
    
    $("#op3").click(function(){
        $("#personal").html("");
        $("#personal").append("<div id='vehiculochofer'></div>");
        $("#vehiculochofer").load('/vehiculos_formulario');


    })
</script>

    
@endsection



<div class="container-fluid app-header " style="width: 87%;padding-top: 12px;background: #eceff1;padding-bottom: 0px;">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-bottom: 0.5rem;">
                    <div class="header" style="">
                         <ul class="personal-submenu">
                            <li id="lista_chofer"><img src="{{asset('img/listar.png')}}" alt=""> Listar Vehiculos &nbsp&nbsp&nbsp&nbsp</li>
                            <li id="registrar_chofer"><img src="{{asset('img/registro.png')}}" alt="">    Registrar Vehiculo &nbsp&nbsp&nbsp&nbsp</li>
                            
                         </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
<div id="personal">
    
</div>
<script>
    
    $("#registrar_chofer").click(function(){
        $("#personal").load('/vehiculos_formulario');

    })
</script>
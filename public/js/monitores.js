$("#btn_registrar").click(function(){
	$(".gif_registro").show();
	var nombres =$("#nombres").val();
	var apellidos =$("#apellidos").val();
	var cedula =$("#cedula").val();
	var telefono =$("#telefono").val();
	var convensional =$("#convensional").val();
	var direccion  =$("#direccion").val();
	var usuario =$("#usuario").val();
	var clave =$("#clave").val();
	var token =$("#token").val();

	if(nombres=="" && apellidos=="" && cedula=="" && telefono=="" && convensional=="" && direccion=="" && usuario=="" && clave==""){
		$(".gif_registro").hide();
		swal('Oops...', 'Por favor debe ingrese los datos del chofer!', 'error');
		$("#nombres").focus();

	}else{
		$.ajax({
		 url:"/store_monitor",
		 headers :{'X-CSRF-TOKEN': token},
		 type: 'POST',
		 dataType: 'json',
	     data: {nombres:nombres,
	     	    apellidos:apellidos,
	     	    cedula:cedula,
	     	    telefono:telefono,
	     	    convensional:convensional,
	     	    direccion:direccion,
	     	    usuario:usuario,
	     	    clave:clave},
			success:function(res){
				if(res.registro=='ok'){
					swal('Ehhh!', 'El monitor se ha registrado!', 'success');
					$(".gif_registro").hide();
				}
	        }
    	});
	}
});
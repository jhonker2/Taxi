$("#btn_registrar").click(function(){
	$(".gif_registro").show();
	var nombres =$("#nombres").val();
	var apellidos =$("#apellidos").val();
	var cedula =$("#cedula").val();
	var telefono =$("#telefono").val();
	var convensional =$("#convensional").val();
	var referencia  =$("#referencia").val();
	var token =$("#token").val();

	if(nombres=="" && apellidos=="" && cedula=="" && telefono=="" && convensional=="" && referencia=="" ){
		$(".gif_registro").hide();
		swal('Oops...', 'Por favor debe ingrese los datos del chofer!', 'error');
		$("#nombres").focus();

	}else{
		$.ajax({
		 url:"/store_clientes",
		 headers :{'X-CSRF-TOKEN': token},
		 type: 'POST',
		 dataType: 'json',
	     data: {
	     	    nombres:nombres,
	     	    apellidos:apellidos,
	     	    cedula:cedula,
	     	    telefono:telefono,
	     	    convensional:convensional,
	     	    referencia:referencia
	     	    },
			success:function(res){
				if(res.registro=='ok'){
					swal('Ehhh!', 'El cliente se ha registrado!', 'success');
					limpiar();
					$(".gif_registro").hide();
				}
	        }
    	});
	}
});

function limpiar(){
	$("#nombres").val("");
	$("#apellidos").val("");
	$("#cedula").val("");
	$("#telefono").val("");
	$("#convensional").val("");
	$("#referencia").val("");
}
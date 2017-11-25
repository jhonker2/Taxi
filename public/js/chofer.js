$("#btn_registrar").click(function(){
	var nombres =$("#nombres").val();
	var apellidos =$("#apellidos").val();
	var cedula =$("#cedula").val();
	var telefono =$("#telefono").val();
	var convensional =$("#convensional").val();
	var direccion  =$("#direccion").val();
	var usuario =$("#usuario").val();
	var clave =$("#clave").val();
	var token =$("#token").val();

	$.ajax({
	        url:"/store_chofer",
	        headers :{'X-CSRF-TOKEN': token},
	        type: 'POST',
	        dataType: 'json',
	        data: {nombres:nombres,apellidos:apellidos,cedula:cedula,telefono:telefono,convensional:convensional,direccion:direccion,usuario:usuario,clave:clave},
			success:function(res){
				if(res.registro=='ok'){
					alert("Chofer registrados");
				}
	        }
    	});


});
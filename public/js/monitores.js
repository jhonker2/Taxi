$("#btn_registrarMonitor").click(function(){
	
	var nombres =$("#nombresMonitor").val();
	var apellidos =$("#apellidosMonitor").val();
	var token =$("#token").val();
	alert(nombres);


	if(nombres=="" ){
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
	     	    },
			success:function(res){
				if(res.registro=='ok'){
					swal('Ehhh!', 'El monitor se ha registrado!', 'success');
					limpiar();
					$(".gif_registro").hide();
				}
	        }
    	});
	}
});
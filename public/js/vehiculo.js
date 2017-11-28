
$("#btn_registrar").click(function(){
	var placa =$("#placa").val();
	var unidad =$("#unidad").val();
	var marca =$("#marca").val();
	var choferes =$("#list_chofer").val();
	var token =$("#token").val();

	$.ajax({
	        url:"/store_vehiculo",
	        headers :{'X-CSRF-TOKEN': token},
	        type: 'POST',
	        dataType: 'json',
	        data: {placa:placa,unidad:unidad,marca:marca,choferes:choferes},
			success:function(res){
				if(res.registro=='ok'){
					alert("Chofer registrados");
					limpiar();
				}
	        }
    	});


});


function limpiar(){
	$("#placa").val("");
	$("#unidad").val("");
	$("#marca").val("");
	$("#list_chofer").val("");
}

$("#btn_eliminar").click(function(){
	var eliminar =$("#eliminar").val();

	$.ajax({
	        url:"/eliminar_vehiculo",
	        headers :{'X-CSRF-TOKEN': token},
	        type: 'POST',
	        dataType: 'json',
	        data: {eliminar:eliminar},
			success:function(res){
				if(res.registro=='ok'){
					alert("Chofer registrados");
					limpiar();
				}
	        }
    	});


});


function eliminar_vehiculo(id){
	swal({
  		title:'Esta seguro?',
  		text: 'De eliminar a este vehiculo!',
  		type: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
  			debugger
  		if (result) {
  			$.ajax({
		 		url:"/delete_vehiculo/"+id,
		 		type: 'GET',
		 		dataType: 'json',
			success:function(res){
				if(res.RES){
					//swal('Ehhh!', 'El chofer se ha registrado!', 'success');
    				$("#tabla_vehiculo").html("");
    				$("#tabla_vehiculo").load('/view_tablav');
    				swal('Deleted!', 'vehiculo se ha elimnado.', 'success')
					//limpiar();
					//$(".gif_registro").hide();
				}
	        }
    	});
  		}
	})
}

function activar_vehiculo(id){
	swal({
  		title:'Esta seguro?',
  		text: 'De Activar a este vehiculo!',
  		type: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3085d6',
  		cancelButtonColor: '#d33',
  		confirmButtonText: 'Si, activar!'
	}).then((result) => {
  			debugger
  		if (result) {
  			$.ajax({
		 		url:"/activar_vehiculo/"+id,
		 		type: 'GET',
		 		dataType: 'json',
			success:function(res){
				if(res.RES){
					//swal('Ehhh!', 'El chofer se ha registrado!', 'success');
					$("#tabla_vehiculo").html("");
    				$("#tabla_vehiculo").load('/view_tablav');
    				swal('Activación!', 'vehiculo se ha activado.', 'success')
					//limpiar();
					//$(".gif_registro").hide();
				}
	        }
    	});
  		}
	})
}


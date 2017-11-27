
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
				}
	        }
    	});


});
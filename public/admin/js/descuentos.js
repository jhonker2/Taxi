$("#btn_r_descuento").click(function(){
	var descuento = $("#descuento").val();
	var valor	  = $("#valor").val();
	var token	  = $("#token").val();
	if(descuento=="" && valor==""){
		alert("Los campos de ingreso se encuentran vacios");
		$("#descuento").focus();
	}else{
		$.ajax({
	        url:"/descuentos",
	        headers :{'X-CSRF-TOKEN': token},
	        type: 'POST',
	        dataType: 'json',
	        data: {descuento:descuento,valor:valor},
			success:function(res){
				if(res.registro=='ok'){
					$("#tabla_descuentos").html();
					$("#tabla_descuentos").load('lista_descuentos');
					$("#form_registro").modal('hide');

				}
	        }
    	});
	}
});

function show_modal_r(){
	$("#form_registro").modal('show');
	$('#form_registro').on('shown.bs.modal', function () {
    $('#descuento').focus();
}) 
}
$(function(){

	$("#tabla_OT").on("click",".editar-ot",function(){

		var idOT = $(this).attr('data-id');

		$.ajax({
			url : "getOT",
			type : "POST",
			dataType : "json",
			data:{idot : idOT},
			success : function(json){
				if(json.response_code == '200'){

					$(json.ot).each(function(i,r){

						$('#id_ot').val(r.ID_OT);
						$('#desc').val(r.DESC_OT);
						$("#horas").val(r.HORAS_OT);
						$("#fec_in").val(r.FEC_IN_OT);
						$("#fec_fin").val(r.FEC_FN_OT);
						$("#id_estatus").val(r.ID_ESTATUS);
						$('#lider').val(r.LIDER_CLIENTE_OT);
						$('#id_proyecto').val(r.ID_PROYECTO);				
					

					});
					
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});

	/**
	*funcion para elimiar a un recurso
	*/
	$("#tabla_OT").on("click",".eliminar-ot",function(){

		var idot = $(this).attr('data-id');

		$.ajax({
			url : 'cancelar_ot',
			type : "POST",
			dataType : "json",
			data:{idOT : idot},
			success : function(json){
				if(json.response_code == '200'){
					alert("Se cancelo orden de trabajo");
					$('#estatus_'+idot).html("Cancelado");			
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});


});

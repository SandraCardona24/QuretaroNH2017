$(function(){

	/**
	*funcion para traer la informacion de un recurso por id
	*/
	$("#tabla_proyecto").on("click",".editar-pro",function(){

		var idPro = $(this).attr('data-id');

		$.ajax({
			url : "getProyecto",
			type : "POST",
			dataType : "json",
			data:{idProy : idPro},
			success : function(json){
				if(json.response_code == '200'){

					$(json.proyecto).each(function(i,r){

						$('#id_proyect').val(r.ID_PROYECT);
						$("#nom_proyect").val(r.NOM_PROYECT);
						$("#fecha_ini").val(r.FECHA_INI);
						$("#fecha_ter").val(r.FECHA_TER);
						$("#desc_proyect").val(r.DESC_PROYECT);
						$('#id_tec').val(r.ID_TEC);
						$('#id_estatus').val(r.ID_ESTATUS);	
						$('#id_oficina').val(r.ID_OFICINA);
					

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
	$("#tabla_proyecto").on("click",".eliminar-pro",function(){

		var idPro = $(this).attr('data-id');

		$.ajax({
			url : 'cancelar_proyecto',
			type : "POST",
			dataType : "json",
			data:{idProy : idPro},
			success : function(json){
				if(json.response_code == '200'){
					alert("Se cancelo proyecto");
					$('#estatus_'+idPro).html("Cancelado");			
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});


});

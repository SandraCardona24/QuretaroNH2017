$(function(){


	$(".proyect").each(function(){
		
		var identificador_proyecto = $(this).attr('data-id');
		
		$(this).click(function(){
			$.ajax({
				url : "Admin/getDetalle",
				type : "POST",
				dataType : "json",
				data:{idRec : identificador_proyecto},
				success : function(json){
					if(json.response_code == '200'){
						alert("Checa el detalle");

						$(json.detalleA).each(function(i,a){
							$("#entrega").text("Entrega : "+a.FEC_FN_OT+" Dias");
							$("#encargado").text("A cargo de : "+a.LIDER_CLIENTE_OT);
						});
					}
				},
				error : function(xhr){
					alert("Algo salio Mal");
				}
			});
		});
	});
});
$(function(){


	$(".proyect").each(function(){

		var identificador_proyecto = $(this).attr('data-id');
		
		$(this).click(function(){
			$.ajax({
				url : "getDetalle",
				type : "POST",
				dataType : "json",
				data:{idRec : identificador_proyecto},
				success : function(json){
					if(json.response_code == '200'){

						$(json.recurso).each(function(i,r){


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
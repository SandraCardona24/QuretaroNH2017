$(function () {

	$(".eliminar-pro").each(function(){
		var id=$(this).attr('data-id');
		$(this).click(function(){
			eliminar(id);
		});
	});

});




function eliminar(id){

			$.ajax({
			url : "Proyecto/cancelar_proyecto",
			type : "POST",
			dataType : "json",
			data:{identificador:id},
			success : function(json){
				if(json.response_code == '200'){
					alert("Canelacion correcta");
					limpiaCampos();
					
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});

}
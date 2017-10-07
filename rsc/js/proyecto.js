$(function () {

	$(".eliminar-pro").each(function(){
		var id=$(this).attr('data-id');
		$(this).click(function(){
			eliminar(id);
		});
	});

	$(".editar-pro").each(function(){
		var idEdit = $(this).attr('data-id');
		$(this).click(function(){
			editar(idEdit);

		});
	});

});

function editar(idEdit){

	document.getElementById("id_proy").value = idEdit;
	document.getElementById("edit_proy").submit();

}



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
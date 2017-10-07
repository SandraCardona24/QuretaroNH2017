$(function () {

	var proyecto = "";
	var selectOrden = $("#orden");

	$("#id_proy").on('change', function(){

		proyecto = $("#id_proy").val();
		select(proyecto);
		//alert(proyecto);
	});

	function select(id_proy){
		$.ajax({
			url: "ConfiguracionOT/selectCombo",
			type: "POST",
			datatype: "json",
			data:{identificador: id_proy},
			success : function(json){
				alert("GOL");
				if (json.response_code == '200') {
					alert("Seleccion correcta");
					
					$(json.byProyect).each(function(i,p){
						selectOrden.append('<option value="'+ p.ID_OT+'">'+ p.DESC_OT +' </option>');
					});
				}
			},
			error: function(xhr){
				alert("Algo salio mal");
			}
		});
	}



});
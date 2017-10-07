$(function () {

	var proyecto = "";

	$("#id_proy").on('change', function(){

		proyecto = $("#id_proy").val();
		//alert(proyecto);
	});

	function select(id_proy){
		$.ajax({
			url: "ConfiguracionOT/selectCombo",
			type: "POST",
			datatype: "json",
			data:{identificador: id_proy},
			success : function(json){
				if (json.response_code == '200') {
					alert("Seleccion correcta");
				}
			}
		});
	}



});
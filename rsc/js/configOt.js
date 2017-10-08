$(function () {

	var proyecto = "";

	$("#id_proy").on('change', function(){

		proyecto = $("#id_proy").val();
		select(proyecto);
		//alert(proyecto);
	});

	function select(id_proy){
		/*
		$.ajax({
			url: "ConfiguracionOT/selectCombo",
			type: "POST",
			<<<<<  ES datatType NO datatype , ES CON MAYUSCULAS NO CON MINNUSCULAS<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
			datatype: "json",
			data:{identificador: id_proy},
			success : function(json){
				
				if (json.response_code == '200') {
					alert("Seleccion correcta");
					
					$(json.ordenesbyproyect).each(function(i,p){
						var selectOrden = $("#select_orden_trabajo");
						selectOrden.append('<option value="'+ p.ID_OT+'">'+ p.DESC_OT +' </option>');
					});
				}
			},
			error: function(xhr){
				alert("Algo salio mal");
			}
		});*/

		$.ajax({
			url : "ConfiguracionOT/selectCombo",
			type : "POST",
			dataType : "json",
			data:{identificador: id_proy},
			success : function(json){
				if(json.response_code == '200'){
					$(json.ordenesbyproyect).each(function(i,p){
						var selectOrden = $("#select_orden_trabajo");
						selectOrden.append('<option value="'+ p.ID_OT+'">'+ p.DESC_OT +' </option>');
					});
					
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	}



});
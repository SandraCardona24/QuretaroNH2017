$(function(){
	
	var ident = "";
	var name = "";
	var ap = "";
	var am = "";
	var tecPrincipal = 0;
	var tecSecundaria = 0;
	var puesto = 0;
	var status = 0;

	$("#estatus").on('change',function(){
		status = $('#estatus').val();
	});

	$("#tp").on('change',function(){
		tecPrincipal = $('#tp').val();
	});

	$("#ts").on('change',function(){
		tecSecundaria = $('#ts').val();
	});

	$("#ps").on('change',function(){
		puesto = $('#ps').val();
	});


	$("#saveRecurso").click(function(){

		ident = $("#identi").val();
		name = $("#nom").val();
		ap = $("#pater").val();
		am = $("#mater").val();
	
		$.ajax({
			url : "Recursos/recursoDo",
			type : "POST",
			dataType : "json",
			data:{identificador:ident, nombre:name, paterno:ap, materno:am, id_estatus:status, tec_ini:tecPrincipal, tec_sec:tecSecundaria, id_puesto:puesto},
			success : function(json){
				if(json.response_code == '200'){
					alert("Registro correcto");
					limpiaCampos();
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});

	});

	$("#tabla_recurso").on("click",".editar-rec",function(){

		var idRecurso = $(this).attr('data-id');

		$.ajax({
			url : "Recursos/getRecurso",
			type : "POST",
			dataType : "json",
			data:{idRec : idRecurso},
			success : function(json){
				if(json.response_code == '200'){

					$(json.recurso).each(function(i,r){
						$("#identi").val(r.ID_RECURSO);
						$("#nom").val(r.NOMBRE_REC);
						$("#pater").val(r.APATERNO_REC);
						$("#mater").val(r.AMATERNO_REC);
						$('#estatus').val(r.ID_ESTATUS);
						$('#tp').val(r.ID_TEC_PRI);	
						$('#ts').val(r.ID_TEC_SEC);
						$('#ps').val(r.ID_PUESTO);
					});
					
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});


	$("#tabla_recurso").on("click",".eliminar-rec",function(){

		var idRecurso = $(this).attr('data-id');

		$.ajax({
			url : "Recursos/eliminarRecurso",
			type : "POST",
			dataType : "json",
			data:{idRecE : idRecurso},
			success : function(json){
				if(json.response_code == '200'){
					
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});
	});



	


	function limpiaCampos(){
		$("#identi").val("");
		$("#nom").val("");
		$("#pater").val("");
		$("#mater").val("");
		$('#estatus').val('0');
		$('#tp').val('0');
		$('#ts').val('0');
		$('#ps').val('0');
	}
});
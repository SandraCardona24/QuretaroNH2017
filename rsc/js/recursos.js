$(function(){
	
	var ident = $("identificador").val();
	var name = $("nombre").val();
	var ap = $("paterno").val();
	var am = $("materno").val();
	$("#estatus").on('change',function(){
		var status = $('#estatus').val();
	});

	$("#tp").on('change',function(){
		var tecPrincipal = $('#tp').val();
	});

	$("#ts").on('change',function(){
		var tecSecundaria = $('#ts').val();
	});

	$("#ps").on('change',function(){
		var puesto = $('#ps').val();
	});



	$("#saveRecurso").click(function(){
		
		$.ajax({
			url : "<?=base_url()?>index.php/Recurso/recursoDo",
			type : "POST",
			dataType : "json",
			data:{identificador:ident, nombre:name, paterno:ap, materno:am, id_estatus:status, tec_ini:tp, tec_sec:ts, id_puesto:puesto},
			success : function(json){
				if(json.response_code == '200'){
					alert("Registro correcto");
				}
			},
			error : function(xhr){
				alert("Algo salio Mal");
			}
		});

	});
});
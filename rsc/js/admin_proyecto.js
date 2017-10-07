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
						$("#listaActivo").find('li').remove();
						$(json.detalleBa).each(function(i,a){
							$("#listaActivo").append('<li>'+a.DESC_TA+'</li>');
						});

						$("#listaDesactivo").find('li').remove();
						$(json.detalleBa).each(function(i,a){
							$("#listaDesactivo").append('<li>'+a.DESC_TA+'</li>');
						});

						var elemD = document.getElementById("progress-bar-danger");
          				var elemS = document.getElementById("progress-bar-success");
          
          				var totalLi = $('.callout-warning ul li').length + $('.callout-success ul li').length;
          				var widthDanger = $('.callout-warning ul li').length/totalLi * 100;
				        var widthSuccess = $('.callout-success ul li').length/totalLi * 100;
          				
          				elemD.style.width = widthDanger + '%';
          				elemD.innerHTML = widthDanger + '%';
					}
				},
				error : function(xhr){
					alert("Algo salio Mal");
				}
			});
		});
	});
});
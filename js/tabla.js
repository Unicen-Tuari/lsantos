$('document').ready(function(){

	// Definicion de Variables
	grupo = 41;

		
		function cargarMenu(grupo){
			var horario = $('#horario').val();
			$('#horario').val('');
			var sabado = $('#sabado').val();
			$('#sabado').val('');
			var domingo = $('#domingo').val();
			$('#domingo').val('');
			
			var registro = [horario, sabado, domingo];
			var registroCompleto = {
					'group': grupo,
					'thing': registro
				};
			if( horario.length > 0 & sabado.length > 0 & domingo.length > 0 ){
				$.ajax({
					type: 'POST',
					dataType: 'JSON',
					data: JSON.stringify(registroCompleto),
					contentType: 'application/json; charset=utf-8',
					url: 'http://web-unicen.herokuapp.com/api/create',
					success: function(data){
								leerGrupo(grupo);
							},
					error: function(data){
								alert("El menu no se pudo cargar");
								leerGrupo(grupo);
							}
				});
			} else {
				alert('Los campos no deben estar vacios');
				leerGrupo(grupo);
			};
		};

	
	function leerGrupo(grupo){
		$.ajax({
			type: 'GET',
			dataType: 'JSON',
			url: 'http://web-unicen.herokuapp.com/api/group/' + grupo,
			success: function(data){
						var horario = '';
						var sabado = '';
						var domingo = '';
						var registro = '';
						$('#menu-lista').html('');
						for (var i = 0 ; i < data.information.length ; i++){
							horario = data.information[i]['thing'][0];
							sabado = data.information[i]['thing'][1];
							domingo = data.information[i]['thing'][2];
							registro = '<tr><td class="horario">' + horario + '</td><td>' + sabado + '</td><td>' + domingo	+  '</td></tr>';
							$('#menu-lista').append(registro);
						}
					},
			error: function(){
						alert('Error al Cargar la Tabla de Menu');
					}
		});
	};

	
	leerGrupo(grupo);

	
	$('#agregar-menu').on('click', function(event){
		event.preventDefault();
		cargarMenu(grupo);
	});
});
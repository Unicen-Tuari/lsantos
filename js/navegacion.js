$(document).ready(function(){

	var inicio = 'inicio';
	var carta = 'carta';
	var historia = 'historia';
	var menu = 'menu';
	var contacto = 'contacto';
	var gestorNoticias = 'gestorNoticias';

	function cargarPagina(seccion){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?action=' + seccion,
			success: function(data){
						$('#conten').html(data);
					},
			error: function(){
						alert('Error al Cargar la Pagina de ' + seccion);
					}
		});
	};

	$('#ini').on('click', function(event){
		event.preventDefault();
		cargarPagina(inicio);
	});
	$('#ca').on('click', function(event){
		event.preventDefault();
		cargarPagina(carta);
	});
  $('#hi').on('click', function(event){
		event.preventDefault();
		cargarPagina(historia);
	});
	$('#me').on('click', function(event){
		event.preventDefault();
		cargarPagina(menu);
	});
	$('#co').on('click', function(event){
		event.preventDefault();
		cargarPagina(contacto);
	});
	// Carga la Seccion Contacto al Presionar Contacto en el boton RESERVAR en inicio
	$('#re').on('click', function(event){
		event.preventDefault();
		cargarPagina(contacto);
	});

	$('#not').on('click', function(event){
		event.preventDefault();
		cargarPagina(noticias);
	});
});

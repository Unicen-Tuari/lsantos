   // Solo Ejecuta Codigo cuando el DOM esta Totalmente Cargado
 $('document').ready(function(){
   	// Definicion de Variables con los Nombres de las Secciones
   	var inicio = 'inicio';
   	var carta = 'carta';
   	var historia = 'historia';
   	var menu = 'menu';
    var ubicacion= 'ubicacion',
   	/* Funcion que Carga en el Contenedor Principal la
   		Seccion que se le pase como Parametro */
   	function cargarHtml(seccion){
   		$.ajax({
   			type: 'GET',
   			dataType: 'HTML',
   			url: seccion + '.html',
   			success: function(data){
   						$('#contenedor-principal').html(data);
   					},
   			error: function(){
   						alert('Error al Cargar la Pagina de ' +  seccion);
   					}
   		});
   	};

   	// Carga la Pagina de Inicio al Ingresar o Recargar el Sitio
   	cargarSeccion(inicio);

   	// Carga la Seccion Inicio al Presionar Inicio en el NAV
   	$('#ini').on('click', function(event){
   		event.preventDefault();
   		cargarSeccion(inicio);
   	});

   	// Carga la Seccion Actividades al Presionar Actividades en el NAV
   	$('#ca').on('click', function(event){
   		event.preventDefault();
   		cargarSeccion(actividades);
   	});

   	// Carga la Seccion Galeria al Presionar Galeria en el NAV
   	$('#hi').on('click', function(event){
   		event.preventDefault();
   		cargarSeccion(galeria);
   	});

   	// Carga la Seccion Contacto al Presionar Contacto en el NAV
   	$('#me').on('click', function(event){
   		event.preventDefault();
   		cargarSeccion(contacto);
   	});
    // Carga la Seccion Contacto al Presionar Contacto en el NAV
   	$('#ub').on('click', function(event){
   		event.preventDefault();
   		cargarSeccion(contacto);
   });
   });

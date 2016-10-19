$(document).ready(function(){
  $('#listaNoticias').on('click','.eliminarNoticias', function(){
      event.preventDefault();
      $.get( "index.php?action=borrar_noticia",{ id_not: $(this).attr("idnot") }, function(data) {
        $('#listaNoticias').html(data);
        $('#tarea').val('');
      });
   });

  $('#agregarNotBtn').click(function(){
    event.preventDefault();
    var fd = new FormData(document.getElementById("formNoticia"));
    //fd.append("CustomField", "This is some extra data");
    $.ajax({
      url: "index.php?action=agregar_noticia",
      type: "POST",
      data: fd,
      success: function(data){
         $("#listaNoticias").html(data);
              // alert(data);
        },
            error: function(){
               alert("No anduvo la llamada AJAX");
            },
      processData: false,  // tell jQuery not to process the data
      contentType: false   // tell jQuery not to set contentType
    });
  });

  $('#agregarCatBtn').click(function(){
    event.preventDefault();
    $.post( "index.php?action=agregar_categoria",$("#formCategoria").serialize(), function(data) {
    $('#listaCategorias').html(data);
    $('#cat').val('');
    $.post( "index.php?action=mostrar_categorias", function(data) {
      $('#id_cat').html(data);
      //  alert("Data: " + data + "\nStatus: " + status);
    });
    });
  });
  $('#listaCategorias').on('click','.glyphicon-trash', function(){
      event.preventDefault();
      $.get( "index.php?action=borrar_categoria",{ id_categoria: $(this).attr("idcat") }, function(data) {
        $('#listaCategorias').html(data);
        $('#cat').val('');
        $.post( "index.php?action=mostrar_categorias", function(data) {
          $('#id_cat').html(data);
          //  alert("Data: " + data + "\nStatus: " + status);
        });
      });
    });

   $(".botonAgregarImagenes").on("click", function(event){
     event.preventDefault();
     var datos1 = new FormData(document.getElementById("formNoticia"));
        if(typeof(datos1) == 'undefined'){
          alert("No pusiste imagenes");
          return;
        }
        $.ajax({
         type: "POST",
         url: event.target.href,
         data: datos1,
         success: function(data){
           alert(data);
         },
         error: function(){
           alert("No anduvo la llamada AJAX");
         },
         contentType : false,
         processData : false
       });
   });

   $("#listaCategorias").on("click",'.modCat',function(){
     event.preventDefault();
     var data1= $(this).attr("data-cat");
     var data2=$(this).attr("idcat");
     $('#catModal').modal();
     $('#catmod').val(data1);
     $('#id_catmod').val(data2);
   });

   $('.btn-primary').click(function () {
     event.preventDefault();
     $.post( "index.php?action=modificar_categoria",{ id_catmod: $('#id_catmod').val(),catmod:$('#catmod').val()}, function(data) {
     $('#listaCategorias').html(data);
     $('#cat').val('');
     $.post( "index.php?action=mostrar_categorias", function(data) {
       $('#id_cat').html(data);
      // $('data-dismiss').click();
       //  alert("Data: " + data + "\nStatus: " + status);
     });
     });
   });

   $('#listaNoticias').on('click','.modificarNoticia', function(){
     event.preventDefault();
     var data1=$(this).attr("data-catid");
     var data2=$(this).attr("data-not");
     var data3=$(this).attr("data-desc");
     var data4=$(this).attr("data-id");
     $('#notModal').modal();
     $('#id_catnotmod').val(data1);
     $('#notmod').val(data2);
     $('#descmod').val(data3);
     $('#id_notmod').val(data4);
     });

     $('#btn-not').click(function () {
       event.preventDefault();
       $.post( "index.php?action=modificar_noticia",
       { id_not: $('#id_notmod').val(),not:$('#notmod').val(),desc:$('#descmod').val(),id_cat:$('#id_catnotmod').val()}, function(data) {
         $('#listaNoticias').html(data);
       });

       });


});

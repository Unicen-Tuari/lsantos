<!DOCTYPE HTML>
  <head>
    <meta name="keywords" content="asado, carne al asador,parrillada">
    <meta name="description" content="Asador criollo y restaurant estilo campo">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Don Coco</title>
      <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap_custom_style.css" rel="stylesheet">
    <!--link rel="stylesheet" href="css/style.css" type="text/css" media="screen"-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body class="cort">
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation ">
      <div class="container ">
        <div class="navbar-header page-scroll ">
          <button type="button " class="navbar-toggle" data-toggle="collapse " data-target=".navbar-ex1-collapse ">
            <span class="sr-only ">Toggle navigation</span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
          </button>
          <a class="navbar-brand page-scroll " target="_blank" href="http://localhost/lsantos/index.php? "><span class="text-invert">Don Coco  </span></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex-collapse ">
          <ul class="nav navbar-nav navbar-right ">
            <li>
              <a target="_blank" href="http://localhost/lsantos/index.php?">Inicio</a>
            </li>
            <li>
              <a target="_blank" href="http://localhost/lsantos/index.php?">Carta</a>
            </li>
            <li>
              <a id="hi" ></a>
            </li>
            <li>
              <a id="me" ></a>
            </li>
            <li>
              <a id="co" ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <body class="cort">
    <div class="container">
      <div class="page-header">
        <h1>Lista de Noticias</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="control-label" for="nombre"></label>
          <ul class="">
            {foreach $tareas as $tarea}
            <li class="">
                  {if $tarea['realizada']}
                    <s>{$tarea['tarea']}</s>
                  {else}
                    <h4>{$tarea['tarea']} |
                    {foreach $categorias as $categoria}
                      {if $categoria['id_categoria'] eq $tarea['fk_id_categoria']}
                      {$categoria['nombre']}
                      {/if}
                      {/foreach}
                  {/if}
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task={$tarea['id']}"></a>
                 <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregar_imagenes&id_task={$tarea['id']}"></a></h4>
                  {foreach $tarea['imagenes'] as $imagen}
                  <img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-tarea-{$tarea['id']}" class="img-thumbnail" >
                  {/foreach}</li>
            {/foreach}
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          {if count($errores) gt 0}
          <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Errores</h3>
            </div>
            <ul>
              {foreach $errores as $error}
                <li>{$error}</li>
              {/foreach}
            </ul>
          </div>
          {/if}
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_tarea" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="id_cat"><h3>Nueva Noticia</h3></label>
              <select class=" form-control" id="id_cat" name="id_cat" placeholder="Categoria" name="id_cat">
                {foreach $categorias as $categoria}
                    <option value = "{$categoria['id_categoria']}" > {$categoria['nombre']}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group">
              <label for="task"></label>
              <input type="text" class="form-control" id="task" name="task" placeholder="Titulo">
            </div>
            <div class="form-group">
              <label for="desc"></label>
              <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file"  name="imagesToUpload[]" id="imagesToUpload" >
            </div>
            <button type="submit" class="btn btn-default">Agregar Noticia</button>
          </form>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-6">
          <label class="control-label" for="nombre"><h3>Lista de Categorias</h3></label>
          <ul class="list-group">
            {foreach $categorias as $categoria}
            <li class="">
                      {$categoria['nombre']}
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_categoria&id_categoria={$categoria['id_categoria']}"></a>
              </li>
            {/foreach}
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="cat"><h3>Nueva Categoria</h3></label>
              <input type="text" class="form-control" id="cat" name="cat" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
       $(".botonAgregarImagenes").on("click", function(event){
         event.preventDefault();

         var archivos = $("#imagesToUpload").prop('files');

         if(typeof(archivos) == 'undefined'){
           alert("No pusiste imagenes");
           return;
         }

         var datos = new FormData();

         $.each(archivos, function(key,value){
           datos.append(key,value);
         });

         $.ajax({
           type: "POST",
           dataType: "json",
           url: event.target.href,
           data: datos,
           success: function(data){
             alert(data.result);
           },
           error: function(){
             alert("No anduvo la llamada AJAX");
           },
           contentType : false,
           processData : false
         });

       });
     </script>

  </body>
</html>

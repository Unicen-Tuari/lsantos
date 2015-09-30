
<div id="conten2"class="container">
  <div class="page-header">
    <h1>Lista de Noticias</h1>
  </div>
  <div class="row">
    <div class="col-md-6" >
      <label class="control-label" for="nombre"></label>
      <ul class="list-group" >
        {foreach $tareas as $tarea}
        <li class=""><h3>

                {$tarea['tarea']} |
                {foreach $categorias as $categoria}
                  {if $categoria['id_categoria'] eq $tarea['fk_id_categoria']}
                  {$categoria['nombre']}
                  {/if}
                  {/foreach}
                </h3>

            <a class="btn btn-primary" href="index.php?action=noticia&id_task={$tarea['id']}">Ver Noticia</a><br><br>

              {foreach $tarea['imagenes'] as $imagen}
              <img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-tarea-{$tarea['id']}" class="img-responsive" />
              {/foreach}</li>
        {/foreach}
      </ul>
    </div>
  </div>
</div>
<script>
     $(".glyphicon glyphicon-trash").on("click", function(event){
       event.preventDefault();


       $.ajax({
         type: "GET",
         dataType: "HTML",
         url: event.target.href,

         success: function(data){

           $('#conten2').html(data);

         },
         error: function(){
           alert("No anduvo la llamada AJAX");
         }

       });

     });
   </script>
